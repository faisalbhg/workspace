<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class OrientationEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;

    /**
     * Create a new message instance.
     */

    public function __construct($data)
    {
        $this->data = $data;
        $this->name = $data['name_aof_attendee'];
        $this->email = $data['email'];
        $this->mobile_number = $data['mobile_number'];
        $this->company_name = $data['company_name'];
        $this->office_no = $data['office_no'];
        $this->attend_status = $data['attend_status'];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Registration Confirmed: WeWork Beyond Orientation',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            markdown: 'orientationEmail',
            with: [
                'name' => $this->data['name_aof_attendee'],
                'email' => $this->data['email'],
                'mobile_number' => $this->data['mobile_number'],
                'company_name' => $this->data['company_name'],
                'office_no' => $this->data['office_no'],
                'attend_status' => $this->data['attend_status'],
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
