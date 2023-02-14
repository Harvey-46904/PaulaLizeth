<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnviarCorreo extends Mailable
{
    use Queueable, SerializesModels;
    public $informacion_cliente;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($informacion_cliente)
    {
        $this->informacion_cliente=$informacion_cliente;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('PaginaWeb.correo');
    }
}
