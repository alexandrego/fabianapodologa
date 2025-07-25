<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class AdminAccessNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $ip;
    public $date;

    public function __construct($user, $ip, $date)
    {
        $this->user = $user;
        $this->ip = $ip;
        $this->date = $date;
    }

    public function build()
    {
        return $this->subject('Novo acesso ao painel administrativo')
            ->view('emails.admin_access_notification');
    }
}
