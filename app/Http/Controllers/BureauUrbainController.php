<?php

namespace App\Http\Controllers;

use App\Models\BureauUrbain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BureauUrbainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListBureau()
    {
        $bureauUrbains = DB::table('bureau_urbains')->paginate(5);
         return view('bureaux.liste_bureau', compact('bureauUrbains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateBureau()
    {
        return view('bureaux.creer_bureau');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreBureau(Request $request)
    {
        $bureauUrbain = new BureauUrbain();
        $bureauUrbain->code_bureau_urbain = $request->code_bureau_urbain;
        $bureauUrbain->libelle_bureau_urbain = $request->libelle_bureau_urbain;
        $bureauUrbain->localite_bureau_urbain = $request->localite_bureau_urbain;

        $bureauUrbain->save();
      
        return redirect()->route('bu.liste')->with('message', 'creer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BureauUrbain  $bureauUrbain
     * @return \Illuminate\Http\Response
     */
    public function ShowBureau(BureauUrbain $bureauUrbain)
    {
        return view('bureaux.details_bureau', compact('bureau_urbain'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BureauUrbain  $bureauUrbain
     * @return \Illuminate\Http\Response
     */
    public function EditBureau(BureauUrbain $bureauUrbain)
    {
        return view('bureaux.editer_bureau', compact('bureauUrbain'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BureauUrbain  $bureauUrbain
     * @return \Illuminate\Http\Response
     */
    public function UpdateBureau(Request $request, BureauUrbain $bureauUrbain)
    {

        $bureauUrbain->update($request->all());
        return redirect()->route('bureaux.liste_bureau')->with('message', 'modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BureauUrbain  $bureauUrbain
     * @return \Illuminate\Http\Response
     */
    public function destroy(BureauUrbain $bureauUrbain)
    {
        
    }
}
