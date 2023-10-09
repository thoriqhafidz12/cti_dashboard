@extends('dashboard.template.main')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">LIST OF CATALOG</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('menu') }}">Home</a></li>
                        <li class="breadcrumb-item active">Catalog</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    
    <div class="row">
        <div class="col margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('catalog.create') }}"> Create New Product</a><hr>
            </div>
        </div>
    </div>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>NAMA</th>
                        <th>TYPE</th>
                        <th>SPESIFICATION</th>
                        <th>PRICE</th>
                        <th>PICTURE</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($catalogs as $catalog)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $catalog->name }}</td>
                            <td>{{ $catalog->type }}</td>
                            <td>{{ $catalog->specification }}</td>
                            <td>{{ $catalog->price }}</td>
                            <td><img src="/uploads/{{ $catalog->picture }}" width="100px" alt="picture"></td>
                            <td>
                                <form action="{{ route('catalog.destroy',$catalog->id) }}" method="POST">
        
                                    <a class="btn btn-info" href="{{ route('catalog.show',$catalog->id) }}">Show</a>
        
                                    <a class="btn btn-primary" href="{{ route('catalog.edit',$catalog->id) }}">Edit</a>
        
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
      </div>
      
@endSection