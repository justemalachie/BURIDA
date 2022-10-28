@extends('templates.app')

@section('navbar')

{{-- section barner  --}}
<section class="barner ban-rdv">
    <div class="barner-ban">
        <a href="{{ route('bu.liste')}}">Liste des cellules</a>
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
<section class="section-list-cellules">
    <hr>
    @foreach ($bureauUrbains as $bureauUrbain)
        <div class="form-cellules">
            <div class="form-cellule-container">
                <a href="{{ route('bu.details', $bureauUrbain->id)}}"><span>{{ $bureauUrbain->code_bureau_urbain}}</span></a>
                <a href="{{ route('bu.details', $bureauUrbain->id)}}">{{ $bureauUrbain->libelle_bureau_urbain}}</a>
            </div>
            
            {{-- editer  --}}
            <div class="form-button-edit">
                <a href="{{ route('bu.modifier', $bureauUrbain->id)}}"><i class="fas fa-edit"></i></a>
            </div>

            {{-- supprimer  --}}
            {{-- <div class="form-button-delete">
               <form action="{{ route('bu.supprimer', $bureauUrbain->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </div> --}}
        </div> 
    @endforeach
    <div class="flex justify-center">
        {{ $bureauUrbains->links()}}
    </div>
</section>
<div class="btn-create-rdv flex justify-center">
    <a href="{{ route('bu.creer')}}">créer un bureau urbain</a>
</div>
@endsection
@section('footer')
@endsection