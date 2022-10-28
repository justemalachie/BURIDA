@extends('templates.app')

@section('navbar')

{{-- section barner  --}}
<section class="barner ban-rdv">
    <div class="barner-ban">
        <a href="{{ route('rdvs.liste')}}">Liste des rendez-vous</a>
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
    <h1 class="title-list-rdv">Veuillez choisir une date</h1>
    <hr>
    @foreach ($rdvs as $rdv)
        <div class="form-rdvs">
            <div class="form-list-container">
                <a href="{{ route('postulants.creer')}}">{{ $rdv->date_rdv}}</a>
            </div>
            <div class="form-button-edit-rdvs">
                <a href="{{ route('rdvs.liste')}}"><i class="fas fa-edit"></i></a>
            </div>
            <div class="form-button-delete-rdvs">
                <form action="{{ route('cellules.supprimer', $rdv->id)}}" method="post">
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