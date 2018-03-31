<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\mail\sendMail;

class MailController extends Controller
{

    public function send()
    {
        Mail::send( new sendMail());
    }

}
