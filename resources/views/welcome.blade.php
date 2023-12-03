@extends('layouts.public.app')

@section('content')

    <h1>Welcome</h1>
    <div class="row mt-5 border">

        <div class="col-md-6">
            <div class="card">
                <div class="input-box">
                    <input type="text" class="form-control">
                    <!--<i class="fa fa-search"></i>-->
                    <i class="bi bi-search"></i>                    
                </div>

                <div class="list border-bottom">
                    <i class="fa fa-fire"></i>
                    <div class="d-flex flex-column ml-3">
                    <span>Client communication policy</span> 
                    <small>#politics - may - @max</small>
                </div>                   
            </div>


            <div class="list border-bottom">
                <i class="fa fa-yelp"></i>
                <div class="d-flex flex-column ml-3">
                <span>Major activity done</span> 
                <small>#news - nov - @settings</small>
                </div>                   
            </div>

            <div class="list border-bottom">

                <i class="fa fa-fire"></i>
                <div class="d-flex flex-column ml-3">
                <span>Calling to USA Clients</span> 
                <small>#entertainment - dec - @tunes</small>
                </div>                   
            </div>

            <div class="list">
                <i class="fa fa-weibo"></i>
                <div class="d-flex flex-column ml-3">
                <span>Client communication policy</span> 
                <small>#politics - may - @max</small>
                </div>                   
            </div>
            
        </div>
    </div>
    <div class="col-md-6">
        Imas prostor za iznajmiti prijavite se <a class="btn btn-primary btn-sm" href="{{ route('login') }}">{{ __('Login') }}</a> i  objavite oglas
    </div>

</div>
    


@endsection('content')