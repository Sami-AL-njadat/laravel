<?php

namespace App\Http\Controllers;

use App\Models\Regist;
use App\Http\Requests\StoreRegistRequest;
use App\Http\Requests\UpdateRegistRequest;
use Illuminate\Http\Request;

class RegistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexs(Request $req)
    {
        $req->validate([
            'email' => 'required|email',
            'password' => 'required |min:6',
        ]);
        $name= $req->input('names');
        $email=$req->input('email');
        $password=$req->input('password');
        $repassword=$req->input('repassword');
        if ($password === $repassword) {

        $data = new Regist();
        $data->names = $name;
        $data->email = $email;
        $data->password = $password;
            $data->save();
           return redirect('login');

        }else{
            return  redirect('registration');
        }
        
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
    public function store(StoreRegistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Regist $regist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Regist $regist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRegistRequest $request, Regist $regist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Regist $regist)
    {
        //
    }
}
