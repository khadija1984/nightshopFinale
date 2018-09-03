<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Message;

class ContactFormSite extends Mailable
{
    use Queueable, SerializesModels;
    protected $message;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('example@example.com')
                ->view('emails.contact')
                ->with([
                    'nom' => $this->message->nom,
                    'email' => $this->message->email,
                    'objet' => $this->message->objet,
                    'content' => $this->message->content,
                ]);
    }
}
