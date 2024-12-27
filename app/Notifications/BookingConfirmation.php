<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class BookingConfirmation extends Notification
{
    use Queueable;
    protected $booking;

    /**
     * Create a new notification instance.
     */
    public function __construct($booking)
    {
        $this->booking = $booking;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [\App\Channels\WhatsAppChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toWhatsapp(object $notifiable): MailMessage
    {
        $twilioSid = env('TWILIO_SID');
        $twilioToken = env('TWILIO_AUTH_TOKEN');
        $twilioWhatsappNumber = env('TWILIO_WHATSAPP_NUMBER');

        $client = new Client($twilioSid, $twilioToken);

        $client->messages->create(
            "whatsapp:{$this->booking->phone_number}", // Use phone from booking details
            [
                'from' => "whatsapp:$twilioWhatsappNumber",
                'body' => "Hi {$this->booking->name}, your booking for {$this->booking->service_name} on { $booking->booking_date } at { $booking->time } has been confirmed."
            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
