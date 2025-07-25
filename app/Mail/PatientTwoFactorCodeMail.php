<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PatientTwoFactorCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $code;
    public $patient;

    public function __construct($patient, $code)
    {
        $this->patient = $patient;
        $this->code = $code;
    }

    public function build()
    {
        return $this->subject('Seu código de verificação')
            ->view('emails.patient_two_factor_code');
    }
}
