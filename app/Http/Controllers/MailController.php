<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(Request $request){
        $data['name']= $request->name;
        $data['email']= $request->email;
        $data['subject']= 'Mail Testing';
        $data['phone_number']= $request->phone;
        $data['desc']= $request->message;
        $data['to_name']= 'To HR';

        // $data3[''];
        \Mail::send('mail.email', $data, function($message)use($data) {
            $message->to("alphabitinfoway@gmail.com",$data['to_name'])
                    ->subject($data["subject"]);
        });
        return "Mail send successfully.";
    }
    public function contact(){
        return view('contact');
    }
}
