@extends('landing.index')

@section('content')
@include('landing.shop.navlist')
    <div class="container-sm">
        <div class="row">
            @foreach ($catalogs as $catalog)
            <div class="col">
                <div class="card my-2" style="width: 15rem">
                <img src="{{ asset('uploads/'.$catalog->picture) }}" class="card-img-top" style="max-width: 200px;max-height: 200px">
                    <h5 class="card-title text-center">{{ $catalog->name }}</h5>
                    <p class="card-text">{{ $catalog->type }}<br>{{ $catalog->specification }}<br>{{ $catalog->price }}</p>
                </div>
            </div>
            @endforeach
        </div>
        </div>
    </div>
@endsection