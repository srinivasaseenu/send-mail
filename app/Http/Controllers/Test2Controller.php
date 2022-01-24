<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\Test2Mail;

class Test2Controller extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */

    public function __invoke(Request $request)
    {
        
        $users = User::get();
        // dd($users);
        $details = [
            'subject' => 'Test Mail',
            'body' => 'Hello Here is the test mail, please ignore it.',
        ];
        foreach($users as $user){
            try{
                \Mail::to($user->email)->send(new Test2Mail($details));
            }catch(Exception $e){
                dd('Failed to send mail');
            }
        }

        dd('Successfully sent the mail to all users');


    }
}
