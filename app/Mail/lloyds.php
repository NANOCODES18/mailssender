<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;

class lloyds extends Mailable
{
    use Queueable, SerializesModels;
    public $emaildata = array();
    public $fromattribute;
    public $sendername;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($emaildata)
    {
        //
        $this->emaildata = $emaildata;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
  /**
 * Get the message envelope.
 *
//  * @return \Illuminate\Mail\Mailables\Envelope
 */
    // public function envelope()
    // {
    //     return new Envelope(
    //         from: new Address($fromattribute, $sendername),
    //         subject: 'Order Shipped',
    //     );
    // }

    public function build()
    {
        return $this->markdown('emails.lloyds');
    }
}
