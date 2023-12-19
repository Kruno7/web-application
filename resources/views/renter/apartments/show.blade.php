@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">{{ $apartment->title }} </div>
                        <div class="col-md-6">
                            
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <h3>Moji apartmani</h3>
                    
                        <p>{{ $apartment->title }}</p>
                        
                        @foreach ($apartment->images as $image)
                            <img src="{{ asset('storage/' . $image->image) }}" class="card-img-top" alt="...">
                        @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
