@extends('landing.index')

@section('content')
  <h1 class="text-center bg-green " style="color: white">CATALOG</h1>
    <div class="container ">
        <div class="row justify-content-center ">
            @foreach ($catalogs as $catalog)
              <div class="col">
                <div class="card my-2" style="width: 18rem">
                  <img src="uploads/{{ $catalog->picture }}" class="card-img-top" style="max-width: 385px;max-height: 385px">
                  
                    <h5 class="card-title text-center">{{ $catalog->name }}</h5>
                    <table>
                      <tr>
                        <th>Type</th>
                        <th>: {{ $catalog->type }}</th>
                      </tr>
                      <tr>
                        <th>Specification</th>
                        <th>: {{ $catalog->specification }}</th>
                      </tr>
                      <tr>
                        <th>Price</th>
                        <th>: {{ $catalog->price }}</th>
                      </tr>                      
                    </table>
                </div>
              </div>
            @endforeach
          </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mb-3 align-content-center">
                <div class="card text-center">
                    <div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    
    
@endSection
    