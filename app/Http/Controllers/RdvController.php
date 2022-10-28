<?php

namespace App\Http\Controllers;

use App\Models\rdv;
use Illuminate\Http\Request;

class RdvController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListRdv()
    {
        $rdvs = rdv::paginate(5);
        return view('rdvs.liste_rdv', compact('rdvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateRdv()
    {
        return view('rdvs.creer_rdv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreRdv(Request $request)
    {
        $rdv = new rdv();
        $rdv->date_rdv = $request->date_rdv;
        $rdv->heure_debut = $request->heure_debut;
        $rdv->heure_fin = $request->heure_fin;

        $rdv->save();

        return redirect()->route('rdvs.liste')->with('message', 'le rendez-vous à bien été créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function show(rdv $rdv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function edit(rdv $rdv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rdv $rdv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rdv  $rdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(rdv $rdv)
    {
        //
    }
}
