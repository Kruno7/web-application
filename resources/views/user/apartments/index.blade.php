@extends('layouts.public.app')


@section('content')
<h1>Apartment INDEX</h1>
    <div class="card-body">
        <h3>Stanovi</h3>
        <hr>
        @foreach($apartments as $apartment)
            <h4>{{ $apartment->title }} </h4> <p>{{ $apartment->address }}</p>
                <a href="{{ route('user.apartment.show', $apartment) }}">Klik</a>
            <hr>
        @endforeach
    </div>

@endsection
