@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Creer des rendez-vous</a>
    </div>
</section>
    <section class="form-creer-section">
        <form action="{{route('rdvs.sauver')}}" method="post">
                @csrf
            <div class="form-container rounded-xl shadow-2xl">
                <div class="title-rdv flex justify-center uppercase"><a>Creer un rendez-vous</a> </div>
                <hr>
                <div class="form-date">
                    <label for="date_rdv">Date</label>
                    <input type="date" name="date_rdv" id="date_rdv" required>
                </div>
                <div class="form-time">
                    <label for="heure_debut">Heure début</label>
                    <input type="time" name="heure_debut" id="" required>
                    <label for="heure_debut">Heure fin</label>
                    <input type="time" name="heure_fin" id="" required>
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