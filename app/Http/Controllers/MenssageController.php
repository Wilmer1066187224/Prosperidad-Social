<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;


/* use Illuminate\Http\Request; */

class MenssageController extends Controller
{
   public function store(){

          $message=request()->validate([
          'name' => 'required',
          'email' => 'required',
          'Subject'=> 'required',
          'contact'=>'required|min:3'
    
          ],[

          'name.required'=>'Necesito tu nombre',
          'email.required'=>'Necesito tu email',
          'Subject.required'=>'Necesito tu Subject',
          'contact.required'=>'Necesito tu contact'
    ]);

        Mail::to('wilmera@gmail.com')->send(new MessageReceived($message));/* usar siempre Queue en vez de send Facade, send que contendra el Mail, 
                                                                            Mailabel clase php para representar cada tipo de mail enviado por esta app */
                
                                                                              /* enviar email */
return 'Mensaje enviado'; 
    /* return $request->get('email'); */

   } 
    
}
