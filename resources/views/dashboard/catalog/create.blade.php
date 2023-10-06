@extends('dashboard.template.main')

@section('content')
    <form action="{{ route('dashboard.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Prodcut Name</label>
            <input type="text" name="name" class="form-control" placeholder="Prodcut Name">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" class="form-control" placeholder="Type">
        </div>
        <div class="mb-3">
            <label for="specifitcation" class="form-label">Specification</label>
            <input type="text" name="specification" class="form-control" placeholder="Specification">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="mb-3">
            <label for="picture" class="form-label">Picture</label>
            <input type="file" name="picture" class="form-control" placeholder="Picture">
        </div>
        <button class="btn btn-primary" value="submit" type="submit">Submit</button>
        
    </form>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }} <br></p>
        </div>
    @endif
        
    {{-- <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
        <textarea class="form-control" rows="3"></textarea>
    </div> --}}
@endSection