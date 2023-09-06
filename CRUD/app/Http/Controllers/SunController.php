<?php

namespace App\Http\Controllers;

use App\Models\Sun;
use App\Http\Requests\StoreSunRequest;
use App\Http\Requests\UpdateSunRequest;

class SunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSunRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sun  $sun
     * @return \Illuminate\Http\Response
     */
    public function show(Sun $sun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sun  $sun
     * @return \Illuminate\Http\Response
     */
    public function edit(Sun $sun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSunRequest  $request
     * @param  \App\Models\Sun  $sun
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSunRequest $request, Sun $sun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sun  $sun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sun $sun)
    {
        //
    }
}
