<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;

class ContactsController extends Controller

{
    
     public function create(){

    	return view('pages.contact');
    }
    
    public function store(ContactFormRequest $request){

    	

    	$mailable = new ContactMessageCreated($request->name,$request->email,$request->message);

    	Mail::to("admin@koola.com")->send($mailable);
    	
 		dump('Done') ;  	
    }

}
