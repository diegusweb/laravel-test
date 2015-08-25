<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request\ContactFormReques;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use todopaerrot\Http\Request\ContactFormRequest;


class AboutController extends Controller
{
   public function create()
   {
		return view('about.contact');
   }
   
   public function store(ContactFormRequest $request)
   {
   		return "asdas";
   }
}
