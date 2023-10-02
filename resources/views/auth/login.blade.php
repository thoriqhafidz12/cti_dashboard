@extends('auth.index')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="/" class="h1"><b>CTI</b>-auth</a>
        </div>
        <div class="card-body">
            <p class="login-box-msg">SHOW ME WHO YOU ARE :)</p>
            @if(session('error'))
                <div class="alert alert-success">
                    <b>Opps!</b> {{session('error')}}
                </div>
            @endif
            <form action="{{ ('login') }}" method="post">
                @csrf
                <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="remember">
                        <label for="remember">
                        Remember Me
                        </label>
                    </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="container text-center my-2">
                <a href="/register" class="btn btn-danger text-center">Register a new membership</a>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
