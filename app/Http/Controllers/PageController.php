<?php

namespace App\Http\Controllers;

use App\Email;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function emails(){
      return view('emails',[
        'emails' => Email::with('user')->latest()->paginate()
      ]);
    }

    public function email(Email $email){
      return view('email',[
        'email' => $email
      ]);
    }
}
