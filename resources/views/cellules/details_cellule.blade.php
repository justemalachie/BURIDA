@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Modifications des cellules</a>
    </div>

</section>
    <section class="form-detail-section">
                @csrf
            <div class="form-container-details rounded-xl shadow-2xl">
                <div class="form-details">
                    <div class="title-cellule-details flex justify-center uppercase"><a>Details de la cellule</a> </div>
                    <hr>
                    <div class="col-field">Code</div>
                    <div class="bg-details">{{$cellule->code_cellule}}</div>
                    <div class="col-field">Libelle</div>
                    <div class="bg-details">{{$cellule->libelle_cellule}}</div>
                    <div class="form-back"><a href="{{ route('cellules.liste')}}">retour</a></div>
                </div>
            </div>
    </section>
@endsection
@section('footer')
@endsection