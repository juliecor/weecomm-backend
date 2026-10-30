<?php

namespace App\Mail;

use App\Models\Realty;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/** "Rosa Cruz asked about Baron Lvxe": an inquiry from the website, to the realty's inbox, reply-to the sender. */
class InquiryMail extends Mailable
{
    use Queueable, SerializesModels;

    /** @param  array{name: string, email: string, phone: string|null, message: string}  $inquiry */
    public function __construct(public Realty $realty, public array $inquiry, public string $about) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Website inquiry: {$this->about} — {$this->inquiry['name']}",
            replyTo: [new Address($this->inquiry['email'], $this->inquiry['name'])],
        );
    }

    public function content(): Content
    {
        return new Content(view: 'mail.inquiry', with: ['brand' => $this->realty->mailBrand()]);
    }
}
