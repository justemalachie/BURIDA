<?php

use App\Http\Controllers\BureauUrbainController;
use App\Http\Controllers\CelluleController;
use App\Http\Controllers\DocumentalisteController;
use App\Http\Controllers\PostulantController;
use App\Http\Controllers\RdvController;
use App\Models\BureauUrbain;
use App\Models\Documentaliste;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Membres 
// Route::get('devenir_membre', []);

// Documentaliste
Route::get('documentalistes', [DocumentalisteController::class, 'ListDocumentaliste'])->name('documentalistes.liste');
Route::get('creer_documentalistes', [DocumentalisteController::class, 'CreateDocumentaliste'])->name('documentalistes.creer');
Route::post('documentalistes', [DocumentalisteController::class, 'StoreDocumentaliste'])->name('documentalistes.sauver');
Route::get('details_documentalistes/{}', [DocumentalisteController::class, 'ShowDocumentaliste'])->name('documentalistes.details');
Route::get('modifier_documentalistes/{}', [DocumentalisteController::class, 'ModifyDocumentaliste'])->name('documentalistes.modifier');
Route::post('modifier_documentalistes', [DocumentalisteController::class, 'UpdateDocumentaliste'])->name('documentalistes.sauvermodification');
Route::post('modifier_documentalistes', [DocumentalisteController::class, 'DeleteDocumentaliste'])->name('documentalistes.supprimer');

//  postulant
Route::get('postulants', [PostulantController::class, 'ListPostulant'])->name('postulants.liste');
Route::get('creer_postulants', [PostulantController::class, 'CreatePostulant'])->name('postulants.creer');
Route::post('postulants', [PostulantController::class, 'StorePostulant'])->name('postulants.sauver');
Route::get('details_postulants/{}', [PostulantController::class, 'DetailsPostulant'])->name('postulants.details');
Route::get('modifier_postulants/{}', [PostulantController::class, 'ModifyPostulant'])->name('postulants.modifier');
Route::post('modifier_postulants', [PostulantController::class, 'UpdatePostulant'])->name('postulants.sauvermodification');
Route::post('postulants', [PostulantController::class, 'DestroyPostulant'])->name('postulants.supprimer');

// Rendez-vous
Route::get('rendez-vous', [RdvController::class, 'ListRdv'])->name('rdvs.liste');
Route::get('creer_rendez-vous', [RdvController::class, 'CreateRdv'])->name('rdvs.creer');
Route::post('rendez-vous', [RdvController::class, 'StoreRdv'])->name('rdvs.sauver');
Route::get('details_rendez-vous/{rdv}', [RdvController::class, 'ShowRdv'])->name('rdvs.details');
Route::get('modifier_rendez-vous/{rdv}', [RdvController::class, 'ModifyRdv'])->name('rdvs.modifier');
Route::post('modifier_rendez-vous', [RdvController::class, 'UpdateRdv'])->name('rdvs.sauvermodification');
Route::delete('supprimer_rendez-vous/{rdv}', [RdvController::class, 'DetroyRdv'])->name('rdvs.supprimer');

// Cellules
Route::get('liste_cellule', [CelluleController::class, 'ListCellule'])->name('cellules.liste');
Route::get('creer_cellule.',[CelluleController::class, 'CreateCellule'])->name('cellules.creer');
Route::post('liste_cellule',[CelluleController::class, 'StoreCellule'])->name('cellules.sauver');
Route::get('details_cellule/{cellule}',[CelluleController::class, 'ShowCellule'])->name('cellules.details');
Route::get('modifier_cellule/{cellule}',[CelluleController::class, 'ModifyCellule'])->name('cellules.modifier');
Route::put('modifier_cellule',[CelluleController::class, 'UpdateCellule'])->name('cellules.sauvermodification');
Route::delete('supprimer_cellule/{cellule}',[CelluleController::class, 'DestroyCellule'])->name('cellules.supprimer');

// Bureau urbain 
Route::get('liste_bureau', [BureauUrbainController::class, 'ListBureau'])->name('bu.liste');
Route::get('creer_bureau', [BureauUrbainController::class, 'CreateBureau'])->name('bu.creer');
Route::post('liste_bureau', [BureauUrbainController::class, 'StoreBureau'])->name('bu.sauver');
Route::get('details_bureau/{}', [BureauUrbainController::class, 'ShowBureau'])->name('bu.details');
Route::get('modifier_bureau/{}', [BureauUrbainController::class, 'EditBureau'])->name('bu.modifier');
Route::post('modifier_bureau', [BureauUrbainController::class, 'UpdateBureau'])->name('bu.sauvermodification');
Route::delete('supprimer_bureau/{}', [BureauUrbainController::class, 'DestroyBureau'])->name('bu.supprimer');

// apropos 
Route::get('a-propos', [AprposController::class, 'Apropos'])->name('apropos');

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
