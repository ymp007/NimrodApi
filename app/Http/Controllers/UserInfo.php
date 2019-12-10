<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;

class UserInfo extends Controller
{
   public function login(){
       return Login::all();
   }
}
