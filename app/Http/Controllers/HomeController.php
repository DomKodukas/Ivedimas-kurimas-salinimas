<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Notification;
use App\Notifications\SendEmailNotification;

class HomeController extends Controller
{
    public function sendnotification()
    {
        $user=User::all();

        $details=[
            'greeting'=>'Sveiki, jus gavote automatine zinute is Konkurso',
            'body'=>'Noriu priminti, kad konkursas vyks Spalio 10 diena',
        ];
        Notification::send($user, new SendEmailNotification($details));
        dd('done');
    }
}
