<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\WeeklyUserReport;
use App\Models\User;
use League\Csv\Writer;
use SplTempFileObject;

class GenerateWeeklyUserReport extends Command
{
    protected $signature = 'report:weekly-users';
    protected $description = 'Generate a weekly report of new users registered in the last seven days and send it via email';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get the current date and the date from 7 days ago
        $startDate = now()->subDays(7);
        $endDate = now();

        // Fetch new users registered in the last 7 days
        $users = User::whereBetween('created_at', [$startDate, $endDate])->get();

        // Create CSV file
        $csv = Writer::createFromFileObject(new SplTempFileObject());
        $csv->insertOne(['id', 'name', 'email', 'created_at']); // Header row

        foreach ($users as $user) {
            $csv->insertOne([
                $user->id,
                $user->name,
                $user->email,
                $user->created_at,
            ]);
        }

        // Save CSV file
        $csvFilePath = storage_path('app/weekly_user_report.csv');
        $csv->output($csvFilePath);

        // Send CSV file via email
        Mail::to('endaweke1234@gmail.com')->send(new WeeklyUserReport($csvFilePath));

        $this->info('Weekly user report generated and emailed successfully.');
    }
}
