@extends('remplates.app')


@section('navbar')

<section class="form-list-postulants">
            <div class="list-postulants">
                @foreach ($collection as $item)
                    
                @endforeach
            </div>
</section>
    
@endsection