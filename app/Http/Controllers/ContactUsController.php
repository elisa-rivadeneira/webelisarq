<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use Mail;

class ContactUsController extends Controller
{

    public function contactUs()
    {
        return view('contactUs');
    }

    public function contactUsPost(Request $request)

    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactUs::create($request->all());

        Mail::send('email',

            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('techanical-atom@gmail.com');
                $message->to('erivadeneiraq@gmail.com', 'Admin')
                    ->subject('Mensaje de Formulario');
            });
        return back()->with('success', 'Gracias por contactarnos!');

    }
}
