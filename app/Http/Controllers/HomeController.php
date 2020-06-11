<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Credential;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use \Validator;

class HomeController extends Controller
{
    public function home () {
        $services = Service::all();
        $credentials = Credential::all();
        return view('Home', [
            'services' => $services,
            'credentials' => $credentials
        ]);
    }

    public function submit (Request $request) {


        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email',
            'auftrags' => 'required',
            'phone' => 'required|numeric',
            'nachricht' => 'required'
        ]);


        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $auftrags = $request->input('auftrags');
        $nachricht = $request->input('nachricht');


         Mail::send('emails.contact',
            [
                'name' => $name,
                'phone' => $phone,
                'email' =>$email,
                'auftrags' => $auftrags,
                'form_message' => $nachricht
            ], function ($message){
                $message->to('gabrielianruben@gmail.com')
                    ->from('websolutions2020@yandex.ru')
                    ->subject('Հետադարձ կապ');
            });


         return redirect('/#contact')->with('success', 'Thank you');


    }
}
