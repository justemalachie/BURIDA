<?php

namespace App\Http\Controllers;

use App\Models\Postulant;
use Illuminate\Http\Request;

class PostulantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListPostulant()
    {
        $postulants = Postulant::all();

        return view('postulants.liste_postulants', compact('postulants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreatePostulant()
    {
        return view('postulants.creer_postulant');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postulant  $postulant
     * @return \Illuminate\Http\Response
     */
    public function show(Postulant $postulant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postulant  $postulant
     * @return \Illuminate\Http\Response
     */
    public function edit(Postulant $postulant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postulant  $postulant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Postulant $postulant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postulant  $postulant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postulant $postulant)
    {
        //
    }
}
