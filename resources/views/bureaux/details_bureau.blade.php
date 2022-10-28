@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Modifications des Bureaux</a>
    </div>

</section>
    <section class="form-detail-section">
                @csrf
            <div class="form-container-details rounded-xl shadow-2xl">
                <div class="form-details">
                    <div class="title-cellule-details flex justify-center uppercase"><a>Details du bureau</a> </div>
                    <hr>
                    <div class="col-field">Code</div>
                    <div class="bg-details">{{$bureauUrbain->code_bureau_urbain}}</div>
                    <div class="col-field">Libelle</div>
                    <div class="bg-details">{{$bureauUrbain->libelle_bureau_urbain}}</div>
                    <div class="form-back"><a href="{{ route('cellules.liste')}}">retour</a></div>
                </div>
            </div>
    </section>
@endsection
@section('footer')
@endsection