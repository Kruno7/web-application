@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">Apartment</div>
                        <div class="col-md-6">
                            <div class="text-end">
                                <a class="btn btn-primary" href="{{ route('renter.apartment.create') }}">Add apartment</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Stanovi</h3>
                    @foreach($apartments as $apartment)
                        <p>{{ $apartment }}</p>
                        <a href="{{ route('renter.apartment.show', $apartment) }}">Show apartment</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
