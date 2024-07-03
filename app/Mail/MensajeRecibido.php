<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MensajeRecibido extends Mailable
{
    use Queueable, SerializesModels;
    public $nombre;
    public $email;
    public $asunto;
    public $mensaje;
    /**
     * Create a new message instance.
     */
    // public function __construct($nombre, $email, $asunto, $mensaje)
    // {
    //     //
    //     $this->nombre = $nombre;
    //     $this->email = $email;
    //     $this->asunto = $asunto;
    //     $this->mensaje = $mensaje;
    // }
    public function __construct($mensaje)
    {
        //
        $this->mensaje = $mensaje;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mensaje Recibido: ' . $this->asunto,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.mensaje-recibido',
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
