<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function login12(Request $request)
    {
        $email = $request-> input('email');
        $password = $request-> input('password');
        $users = DB::select("SELECT * FROM regists WHERE email=? AND password=?", [$email, $password]);
        
        if (!empty($users) ) {
            session(['islogin' => 'yes']);

            return view('wel', compact('users'));
        } else {
            return view('login');
        }


    } 


}
