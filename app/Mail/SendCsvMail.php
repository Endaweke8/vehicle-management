<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendCsvMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $csvFilePath;

    /**
     * Create a new message instance.
     */
    public function __construct($csvFilePath)
    {
        // Store the CSV file path.
        $this->csvFilePath = $csvFilePath;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Weekly New Users Report',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'send-csv-report', // You can customize the message as needed
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->csvFilePath)
                ->as('weekly_new_users.csv')
                ->withMime('text/csv'),
        ];
    }
}
