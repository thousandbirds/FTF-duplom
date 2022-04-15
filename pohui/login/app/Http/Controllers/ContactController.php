<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactSignup;
use App\Http\Requests\ContactSignin;
use App\Models\SignUps;
use App\Models\contactform;


class ContactController extends Controller

{
    public function submit(ContactRequest $request) {

        $contact = new contactform();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->email = $request->input('email');
        $contact->number = $request->input('number');
        $contact->description = $request->input('description');
        $contact->drop_list = $request->input('drop_list');

        $contact->save();

        return redirect()->route('contact-form')->with('success', 'Дані було добавлено');
       // return view('contactform');
    }

    public function sub(ContactSignup $request){

        $contact = new SignUps();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->age = $request->input('age');
        $contact->password = bcrypt($request->input('password'));
        $contact->email = $request->input('email');

        $contact->save();

        return redirect()->route('sign-up')->with('success', 'Реєстрація пройшла успішно');

        // $user = User::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => bcrypt($data['password'])
        // ]);

        // if($user) {
        //     auth('web')->login($user);
        // }

        // return view('signup');
    }   
    public function subin(ContactSignin $request){

        return view('sign-in');
    }
}
