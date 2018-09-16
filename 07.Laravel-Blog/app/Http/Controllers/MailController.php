<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Mail;

use App\Mail\OrderShipped;

class MailController extends Controller
{
    public function index()
    {
//        echo 'Welcome';

        $user = 'fikar@gmail.com';

        Mail::to($user)->send(new OrderShipped);
    }

}
