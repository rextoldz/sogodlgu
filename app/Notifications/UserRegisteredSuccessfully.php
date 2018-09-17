<?php

namespace App\Notifications;

use App\Admin;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredSuccessfully extends Notification
{
     use Queueable;
    /**
     * @var User
     */
    protected $admin;
    /**
     * Create a new notification instance.
     *
     * @param User $user
     */
    public function __construct($admin)
    {
        $this->admin = $admin;
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
        /** @var User $user */
        $admin = $this->admin;
        
        return (new MailMessage)
            ->from('joinnow338@gmail.com', 'Admin')
            ->subject('Successfully created new account')
            ->greeting(sprintf('Hello %s', $admin->name))
            ->line('You have successfully registered to our system. Please activate your account.')
            ->action('Click Here', route('activate.user', $admin->activation_code))
            ->line('Thank you for using our application!');
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
