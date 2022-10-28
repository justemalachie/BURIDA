<?php

namespace App\Http\Controllers;

use App\Models\Cellule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CelluleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ListCellule()
    {   
        $cellules = DB::table('cellules')->paginate(5);
        return view('cellules.liste_cellule', compact('cellules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function CreateCellule()
    {
        return view('cellules.creer_cellule');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function StoreCellule(Request $request)
    {
        $cellule = new Cellule();

        $cellule->code_cellule = $request->code_cellule;
        $cellule->libelle_cellule = $request->libelle_cellule;
        $cellule->save();

        return redirect()->route('cellules.liste')->with('message', 'cellule créer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cellule  $cellule
     * @return \Illuminate\Http\Response
     */
    public function ShowCellule(Cellule $cellule)
    {
        return view('cellules.details_cellule', compact('cellule'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cellule  $cellule
     * @return \Illuminate\Http\Response
     */
    public function ModifyCellule(Cellule $cellule)
    {
        return view('cellules.editer_cellule', compact('cellule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cellule  $cellule
     * @return \Illuminate\Http\Response
     */
    public function UpdateCellule(Request $request, Cellule $cellule)
    {
      $cellule->update($request->all());
      return  redirect()->route('cellules.liste')->with('message', 'Cellule modifier avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cellule  $cellule
     * @return \Illuminate\Http\Response
     */
    public function DestroyCellule(Cellule $cellule)
    {
        $cellule->delete();
        return back()->with('message', 'Supprimer avec succès');
    }
}
