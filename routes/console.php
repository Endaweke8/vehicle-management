<?php

use App\Mail\SendCsvMail;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('send-weekly-users-report', function () {
    // Get users registered in the last 7 days
    $users = User::where('created_at', '>=', now()->subDays(7))->get(['id', 'name', 'email', 'created_at']);

    // Generate CSV file
    $csvFilePath = storage_path('app/weekly_new_users.csv'); // Save CSV file in storage
    $file = fopen($csvFilePath, 'w');
    
    // Add CSV header
    fputcsv($file, ['ID', 'Name', 'Email', 'Created At']);

    // Add user data to CSV
    foreach ($users as $user) {
        fputcsv($file, [$user->id, $user->name, $user->email, $user->created_at]);
    }

    // Close the file
    fclose($file);

    // Send the CSV as an email attachment
    Mail::to('endaweke1234@gmail.com')->send(new SendCsvMail($csvFilePath));

    // Optionally, delete the file after sending the email to free up space
    // Storage::delete('weekly_new_users.csv');
})->purpose('Send weekly report of new users as CSV')->everyMinute();
// ->purpose('Send weekly report of new users as CSV')->weeklyOn(1, '8:00');

