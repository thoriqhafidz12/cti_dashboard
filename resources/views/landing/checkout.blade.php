@extends('landing.index')

@section('content')
    <div class="container-fluid my-2">
        <div class="row">
            <div class="col text-center">
                <img src="https://images.unsplash.com/photo-1602834281510-61f8cee7ddf6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDZ8fGNvYWx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" style="max-height: 1000px; max-width:400px" alt="">    
            </div>

            <div class="col my-2">
                <h4><u>Ready</u> to buy?</h4>
                <form class="row g-3" action="" enctype="multipart/form-data">
                    <div class="col-md-8">
                        <label for="inputEmail4" class="form-label">Full Name</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-8">
                        <label for="inputAddress" class="form-label">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-8">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" class="form-select">
                            <option selected>Choose...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <label for="inputZip" class="form-label">Kode</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>

                    <div class="col-md-8">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    <div class="col-md-8">
                        <label for="inputEmail4" class="form-label">Phones</label>
                        <input type="email" class="form-control" id="inputEmail4">
                    </div>
                    
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">Check me out</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark">Pay</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <h4>BRICEKT</h4>
                <p>Rp. 20.000.000</p>
                <h6></h6>
            </div>
            <div class="col">
                
            </div>
        </div>
    </div>
@endsection