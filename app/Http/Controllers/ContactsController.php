<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactsController extends Controller
{
    
     public function create(){
    	return view('pages.contact');
    }

    public function store(ContactFormRequest $request){

    	dd("contact");
    }

}
