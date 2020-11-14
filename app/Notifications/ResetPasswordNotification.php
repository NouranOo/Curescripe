<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;
use App\Models\User;

class ResetPasswordNotification extends ResetPassword
{
 use Queueable;

/** @var string */
   public $token;
/**
 * @param  string  $token
 * @return void
 */
public function __construct($token)
{
    $this->token = $token;
}

/**
 * Get the notification’s delivery channels.
 *
 * @param mixed $notifiable
 * @return array|string
 */
 public function via($notifiable)
 {
 return ['mail'];
 }

/**
 * Get the mail representation of the notification.
 *
 * @param mixed $notifiable
 * @return \Illuminate\Notifications\Messages\MailMessage
 */
 public function toMail($notifiable)
 {
    if (static::$toMailCallback) {
        return call_user_func(static::$toMailCallback, $notifiable, $this->token);
    }

    $link = url( route('password.reset', $this->token, false));
    return (new MailMessage)
    ->subject('Reset Password')
    ->line('You are receiving this email because we received a password reset request for your account.')
    ->action('Reset Password', $link)
    ->line('This password reset link will expire in :count minutes.', ['count' => config('auth.passwords.users.expire')])
    ->line('If you did not request a password reset, no further action is required.');
 }
}