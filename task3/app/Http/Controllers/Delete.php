<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Delete extends Controller
{
    public function delete(){

        session(['islogin'=>'no']);
      return  redirect('wel');
    }
}
