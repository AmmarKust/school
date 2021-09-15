<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contactus extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
        //dd(widget(1));
        if(null!==($this->data->attached_file)){
            return $this->from($this->data->email_address, $this->data->first_name)
                        ->to(widget(1)->extra_field_3, widget(1)->extra_field_1)
                        ->attach(asset('images/'.$this->data->attached_file))
                        ->subject($this->data->subject)
                        ->view('email_temps.contactus')
                        ->with('data',$this->data);
        }else{
           return $this->from($this->data->email_address, $this->data->first_name)
                        ->to(widget(1)->extra_field_3, widget(1)->extra_field_1)
                        ->subject('Contact Us Request')
                        ->view('email_temps.contactus')
                        ->with('data',$this->data); 
        }
        
    }
}
