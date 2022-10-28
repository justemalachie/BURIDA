<?php

namespace App\Http\Controllers;

use App\Models\Documentaliste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentalisteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListDocumentaliste()
    {
        $documentalistes = DB::table('documentalistes')->paginate(5);
        return view('documentalistes.liste_documentaliste', compact('documentalistes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateDocumentaliste()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreDocumentaliste(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Documentaliste  $documentaliste
     * @return \Illuminate\Http\Response
     */
    public function ShowDocumentaliste(Documentaliste $documentaliste)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Documentaliste  $documentaliste
     * @return \Illuminate\Http\Response
     */
    public function edit(Documentaliste $documentaliste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Documentaliste  $documentaliste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documentaliste $documentaliste)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Documentaliste  $documentaliste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documentaliste $documentaliste)
    {
        
    }
}
