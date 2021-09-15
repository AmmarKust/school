<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ApplyOnJob extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('support@entiretimes.com', 'entiretimes')
            ->to(widget(1)->extra_field_3, widget(1)->extra_field_1)
            ->attach($this->data['cv_path'])
            ->subject($this->data['user']->name.' has applied on '.$this->data['job']->title)
            ->markdown('vendor.mail.html.apply_on_job')->with($this->data);
    }
}
