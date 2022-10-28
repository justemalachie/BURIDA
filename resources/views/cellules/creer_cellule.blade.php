@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Creer des cellules</a>
    </div>

</section>
    <section class="form-creer-section">
        <form action="{{route('cellules.sauver')}}" method="post">
                @csrf
            <div class="form-container rounded-xl shadow-2xl">
                <div class="title-rdv flex justify-center uppercase"><a>Creation de cellule</a> </div>
                <hr>
                <div class="form-date">
                    <label for="code_cellule">Code</label>
                   <input type="text" name="code_cellule" id="code_cellule" required>
                </div>
                <div class="form-time">
                    <label for="libelle_cellule">libelle</label>
                    <input type="text" name="libelle_cellule" id="libelle_cellule" required>
                </div>
                <div class="button-submit flex justify-center p-2 m-1">
                    <button type="submit" value="envoyer">Valider</button>
                </div>
            </div>

    </form>
    </section>
@endsection
@section('footer')
@endsection