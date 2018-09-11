<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class PasswordReset extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    
    public  $token;
    public function __construct($token)
    {
         $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
        
                    ->subject('Demande de réinitialisation de mot de passe')
                    ->greeting('Bonjour,')
                    ->line('Si vous avez demandé à réinitialiser le mot de passe, cliquez sur le bouton ci-dessous. Si vous n\'avez pas fait cette demande, ignorez cet email.')
                    ->action('Réinitialiser le mot de passe', url(config('app.url').route('password.reset', $this->token, false)))
                    ->line('')
                    ->salutation('Cordialement,     l\'Equipe de NightShopEnLigne' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
