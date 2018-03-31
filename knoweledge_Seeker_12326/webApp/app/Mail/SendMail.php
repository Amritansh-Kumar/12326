<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Teacher;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

//    protected $msg1;
    /**
     * Create a new message instance.
     *
     * @return void
     */
   public function __construct( )
    {
//        $this->msg1 = $msg1;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        return $this->view('teacher.feedback',['message'=>$request->msg])->to('muditmehrotra9999@gmail.com');
    }
}
