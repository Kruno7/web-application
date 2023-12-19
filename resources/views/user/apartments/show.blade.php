@extends('layouts.public.app')


@section('content')
<h1>Apartment INDEX</h1>
    <div class="card-body">
        <h3>Stanovi</h3>
        <hr>
            {{ $apartment->title }}
            <!--<a href="{{ route('user.apartment.contact', 1) }}">Posalji poruku iznajmljivacu</a> -->
            
            <!--<button type="button" onclick="sendMessage()" id="insert" value="Add new Product">Posalji poruku iznajmljivacu</button>
            <div id="contact">
                <form id="asd" style="display:block" action="{{ route('user.apartment.contact', 1) }}" method="POST">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mb-3">Posalji poruku</button>
                </form>
            </div> -->
            <hr>
            @foreach ($messages as $message)
                <p>{{ $message->content }}</p>
            @endforeach
            <hr>
            @foreach ($replies as $reply)
                <p>{{ $reply->content }}</p>
            @endforeach
            <!--<div class="row">
                @foreach ($apartment->images as $image)
                    <div class="col-md-4">
                        <div class="card">
                            <img src="{{ asset('storage/' . $image->image) }}" class="card-img-top" alt="...">
                        </div>
                    </div>
                @endforeach
            </div> -->
    </div>

@endsection

<script>
    /*window.onload = function() {
        document.getElementById("asd").style.display = "none";
    };*/
    function sendMessage () {
        document.getElementById("asd").style.display = "block";
        
    }
</script>