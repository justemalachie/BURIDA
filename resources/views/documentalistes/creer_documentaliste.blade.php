@extends('templates.app')

@section('navbar')
<section class="barner_1 ban-rdv">
    <div class="barner-ban">
        <a href="#">Creer des documentalistes</a>
    </div>
</section>
    <section class="form-creer-section">
        <form action="{{route('documentalistes.sauver')}}" method="post">
                @csrf
            <div class="form-container rounded-xl shadow-2xl">
                <div class="title-rdv flex justify-center uppercase"><a>Creer un documentaliste</a> </div>
                <hr>
                div.form
                <div class="button-submit flex justify-center p-2 m-1">
                    <button type="submit" value="envoyer">Valider</button>
                </div>
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sequi libero pariatur reprehenderit similique, quis voluptates blanditiis dignissimos inventore laborum, consectetur non excepturi voluptas asperiores nam, expedita reiciendis officia temporibus provident!</p>

    </form>
    </section>
@endsection
@section('footer')
@endsection
