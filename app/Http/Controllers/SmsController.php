<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function send_sms(Request $request)
     {
         $sendMessage=$request->message;
         $phoneNumber=$request->phone;

        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $senderNumber = getenv("TWITIO_FROM");

        $twilio = new Client ($sid, $token);

        $message = $twilio->messages->create($phoneNumber, // to
                [
                    "body" =>$sendMessage,
                    "from" => $senderNumber,
                ]
        );

        return back()->with('message','send sms successfully');
     }
}

