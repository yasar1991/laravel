<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
   public function validate_user(Request $request){
        $username =  $request->all('username');
        $password = $request->all('password');

        
    }
}
