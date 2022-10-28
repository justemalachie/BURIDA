@extends('templates.app')

@section('navbar')

{{-- section barner  --}}
<section class="barner ban-rdv">
    <div class="barner-ban">
        <a href="{{ route('rdvs.liste')}}">Liste des documentaliste</a>
    </div>
</section>

    {{-- message flash  --}}
<div class="message">
    <div class="form-message flex justify-center">
        @if (session()->has('message'))
            <div class="alert-message" role="alert">
                {{ session()->get('message')}}
            </div>
        @endif
    </div>
</div>

{{-- la liste des rendez-vous  --}}
<section class="section-list-rdv">
    <h1 class="title-list-rdv">Liste des documentaliste</h1>
    <hr>
    @foreach ($documentalistes as $documentaliste)
        <div class="form-rdvs">
            <div class="form-list-container">
                <a href="#">{{ $documentalistes->nom_documentaliste}}</a>
            </div>
            <div class="form-list-container">
                <a href="#">{{ $documentalistes->prenom_documentaliste}}</a>
            </div>
            <div class="form-list-container">
                <a href="#">{{ $documentalistes->email_documentaliste}}</a>
            </div>
            <div class="form-button-edit-rdvs">
                <a href="{{ route('rdvs.liste')}}"><i class="fas fa-edit"></i></a>
            </div>
            <div class="form-button-delete-rdvs">
                <form action="#" method="post">
                    @method('DELETE')
                    <button><i class="fas fa-trash" aria-hidden="true"></i></button>
                </form>
            </div>
        </div> 
    @endforeach
    <div class="flex justify-center">
        {{ $rdvs->links()}}
    </div>
</section>
<div class="btn-create-rdv flex justify-center">
    <a href="{{ route('rdvs.creer')}}">creer un rdv</a>
</div>
@endsection
@section('footer')
@endsection