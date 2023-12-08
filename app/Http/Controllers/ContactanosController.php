<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactanosRequest;
use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{
    public function InicioContactanos(){
        return view('contactanos.contactanos_inicio');
    }

    public function RegistroContactanos(ContactanosRequest $request){
        Mail::to('santosandoval163@gmail.com')
        ->send(new ContactanosMailable($request->all()));

        //session()->flash('info', 'Mensaje enviado');

        return redirect()->route('contactanos.inicio')->with('info', 'Mensaje enviado');
    }
}
