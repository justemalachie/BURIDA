@extends('templates.app')

@section('navbar')

{{-- section barner  --}}
<section class="barner ban-rdv">
    <div class="barner-ban">
        <a href="{{ route('cellules.liste')}}">Liste des cellules</a>
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
    @foreach ($cellules as $cellule)
        <div class="form-cellules">
            <div class="form-cellule-container">
                <a href="{{ route('cellules.details', $cellule->id)}}"><span>{{ $cellule->code_cellule}}</span></a>
                <a href="{{ route('cellules.details', $cellule->id)}}">{{ $cellule->libelle_cellule}}</a>
            </div>
            
            {{-- editer  --}}
            <div class="form-button-edit">
                <a href="{{ route('cellules.modifier', $cellule->id)}}"><i class="fas fa-edit"></i></a>
            </div>

            {{-- supprimer  --}}
            <div class="form-button-delete">
               <form action="{{ route('cellules.supprimer', $cellule->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </div>
        </div> 
    @endforeach
    <div class="flex justify-center">
        {{ $cellules->links()}}
    </div>
</section>
<div class="btn-create-rdv flex justify-center">
    <a href="{{ route('cellules.creer')}}">créer une cellule</a>
</div>
@endsection
@section('footer')
@endsection