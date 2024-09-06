<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class WeeklyUserReport extends Mailable
{
    use Queueable, SerializesModels;

    protected $csvFilePath;

    public function __construct($csvFilePath)
    {
        $this->csvFilePath = $csvFilePath;
    }

    public function build()
    {
        return $this->subject('Weekly User Report')
                    ->view('emails.weekly_user_report')
                    ->attach($this->csvFilePath, [
                        'as' => 'weekly_user_report.csv',
                        'mime' => 'text/csv',
                    ]);
    }
}
