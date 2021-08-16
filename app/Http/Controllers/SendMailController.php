<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendMailController extends Controller
{
    public function sendMail(Request $request){
        $this->validate($request, [
            'email' => 'required'
        ]);
        $sendEmailTo = $request->input('email');
        // $sendEmailTo = 'mutegialex5@gmail.com';

        $details = [
            'title' => 'Wellcome to The Prime Dev',
            'body' => 'You are getting this mail because you have subscribed to simple blog website.'
        ];
        \Mail::to($sendEmailTo)->send(new \App\Mail\MyTestMail($details));
        return redirect('/')->with('success', 'Email sent successfully.');
    }
}
