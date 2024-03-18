<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class website extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $ultimonome, $telefone, $email, $company,
    $coorporativo, $representante, $negocio, $status,
    $tempo, $organizacao, $industria, $nif, $rendimento,
    $website, $dominio, $funcionalidade = [], $price = [];


    public function __construct(
        $name,$ultimonome,$telefone, $email, $company,
        $coorporativo, $representante, $negocio, $status,
        $tempo, $organizacao, $industria, $nif, $rendimento,
        $website, $dominio, $funcionalidade, $price)
    {
        $this->name = $name;
        $this->ultimonome = $ultimonome;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->company = $company;
        $this->coorporativo = $coorporativo; 
        $this->representante = $representante;
        $this->negocio = $negocio; 
        $this->status = $status; 
        $this->tempo = $tempo; 
        $this->organizacao = $organizacao; 
        $this->industria = $industria;
        $this->nif = $nif;
        $this->rendimento = $rendimento; 
        $this->website = $website; 
        $this->dominio = $dominio; 
        $this->funcionalidade = $funcionalidade;
        $this->price = $price;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address("pachecobarrosodig3@gmail.com", $this->name),
            subject: 'Adesão do Website Grátis',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.website',
            with:[
                'name'=>$this->name,
                'ultimonome' => $this->ultimonome,
                'telefone'=>$this->telefone,
                'email'=>$this->email,
                'company'=>$this->company,
                'coorporativo' => $this->coorporativo, 
                'representante' => $this->representante,
                'negocio' => $this->negocio, 
                'status' => $this->status,
                'organizacao' =>$this->organizacao,
                'industria' => $this->industria, 
                'tempo' =>$this->tempo, 
                'nif' =>$this->nif,
                'rendimento' => $this->rendimento,
                'dominio' => $this->dominio,
                'website' => $this->website, 
                'funcionalidade' => $this->funcionalidade,
                'price' => $this->price
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
