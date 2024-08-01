<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RoleCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullName;
    public $email;
    public $password;

    /**
     * Create a new message instance.
     *
     * @param  string  $fullName
     * @param  string  $email
     * @param  string  $password
     * @return void
     */
    public function __construct($fullName, $email, $password)
    {
        $this->fullName = $fullName;
        $this->email = $email;
        $this->password = $password;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('superadmin.role_created')
                    ->with([
                        'fullName' => $this->fullName,
                        'email' => $this->email,
                        'password' => $this->password,
                    ]);
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new \Illuminate\Mail\Mailables\Envelope(
            subject: 'Role Created Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new \Illuminate\Mail\Mailables\Content(
            view: 'superadmin.role_created',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments()
    {
        return [];
    }
}
