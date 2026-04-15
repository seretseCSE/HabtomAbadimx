<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\RFQ;

class NewRFQNotification extends Notification
{
    use Queueable;

    public $rfq;

    /**
     * Create a new notification instance.
     */
    public function __construct(RFQ $rfq)
    {
        $this->rfq = $rfq;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database', 'mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('New RFQ Request - ' . $this->rfq->company_name)
            ->greeting('Hello Admin,')
            ->line('A new Request for Quotation (RFQ) has been submitted.')
            ->line('Company: ' . $this->rfq->company_name)
            ->line('Contact Person: ' . $this->rfq->contact_person)
            ->line('Email: ' . $this->rfq->email)
            ->line('Phone: ' . $this->rfq->phone)
            ->line('Product: ' . $this->rfq->product)
            ->line('Quantity: ' . $this->rfq->quantity . ' ' . $this->rfq->unit)
            ->action('View RFQ', route('admin.rfqs.show', $this->rfq))
            ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'rfq_id' => $this->rfq->id,
            'company_name' => $this->rfq->company_name,
            'contact_person' => $this->rfq->contact_person,
            'email' => $this->rfq->email,
            'product' => $this->rfq->product,
            'quantity' => $this->rfq->quantity,
            'unit' => $this->rfq->unit,
            'title' => 'New RFQ Request',
            'message' => $this->rfq->company_name . ' submitted a new RFQ for ' . $this->rfq->product,
            'type' => 'rfq',
            'url' => route('admin.rfqs.show', $this->rfq),
        ];
    }
}
