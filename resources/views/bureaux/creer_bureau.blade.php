@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Creer des cellules</a>
    </div>

</section>
    <section class="form-creer-section">
        <form action="{{route('bu.sauver')}}" method="post">
                @csrf
            <div class="form-container rounded-xl shadow-2xl">
                <div class="title-rdv flex justify-center uppercase"><a>Creation de bureau</a> </div>
                <hr>
                <div class="form-date">
                    <label for="code_bureau_urbain">Code</label>
                   <input type="text" name="code_bureau_urbain" id="code_bureau_urbain" required>
                </div>
                <div class="form-time">
                    <label for="libelle_bureau_urbain">Libelle</label>
                    <input type="text" name="libelle_bureau_urbain" id="libelle_bureau_urbain" required>
                </div>
                <div class="form-time">
                    <label for="localite_bureau_urbainlibelle_bureau_urbain">Localite</label>
                    <input type="text" name="localite_bureau_urbain" id="localite_bureau_urbain" required>
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