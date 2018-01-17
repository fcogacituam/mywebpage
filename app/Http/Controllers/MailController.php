<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;
use Mail;
use Redirect;
use Session;
class MailController extends Controller
{
    public function store(ContactoRequest $request)
    {
        Mail::send('emails.contacto',$request->all(),function($msj){
        	$msj->subject('Correo de Contacto');
        	$msj->to('fcogacituam@gmail.com');
        });

        Session::flash('message','Mensaje enviado exitosamente');

        return Redirect::to('/');
    }
}
