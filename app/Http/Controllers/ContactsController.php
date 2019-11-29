<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMessageCreated;
use App\Models\Message;

class ContactsController extends Controller

{
    
     public function create(){

    	return view('pages.contact');
    }
    
    public function store(ContactFormRequest $request){


    	/*dump($request->only('name','email','message'));
    	die();
*/

    	$message = Message::create($request->only('name','email','message'));
    	
    	Mail::to(config('koola.admin_support_email'))
    				->send(new ContactMessageCreated($message));
    	
 		flashy("Nous vous repondrons dans les plus brefs delais");

 		return redirect()->route('home');
    }

}
