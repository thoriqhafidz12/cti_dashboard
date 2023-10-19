<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COCOTARU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('Assets/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('Assets/logo.png') }}">
  <body>
    @include('landing.nav')

    @yield('content')

    
      <!-- footer start -->
    <footer class="bg-green">
      <div class="container text-center">
        <div class="row align-items-center">
          <div class="col text-center">
            <h5 style="color:white">Our Social Media</h5>
          </div>
        </div>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-sm-9 p-2">
              <div class="row d-flex justify-content-center my-0">
                <div class="col-auto px-2">
                  <img src="{{ asset('Assets/youtube.png') }}" alt="ytLogo" width="27px" height="19px">
                </div>
                <div class="col-auto px-2">
                  <img src="{{ asset('Assets/linkedin.png') }}" alt="" width="23px" height="23px">
                </div>
                <div class="col-auto px-2">
                  <img src="{{ asset('Assets/instagram.png') }}" alt="" width="23px" height="23px">
                </div>
                <div class="col-auto px-2">
                  <img src="{{ asset('Assets/facebook.png') }}" alt="" width="23px" height="23px">
                </div>
                <div class="col-auto px-2">
                  <img src="{{ asset('Assets/tiktok.png') }}" alt="" width="20px" height="23px">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col text-center">
            <p style="color:white">Copyright &copy; Coco Taru Indonesia 2023. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
      <!-- footer end -->


      <!-- Modal START -->
      <div class="modal fade modal-lg" id="CatalogRequest" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="staticBackdropLabel">Catalog Requests</h1>
              <p>Please fill this form before downloading our product catalog. Download link will be sent to your email.</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
              <form>
                <div class="mb-3">
                  <label class="form-label">Name (Required)</label>
                  <input type="text" class="form-control" placeholder="Input Your Name...">
                </div>
                <div class="mb-3">
                  <label class="form-label">Email Address (Required)</label>
                  <input type="email" class="form-control" placeholder="example@mail.com">
                </div>
                <div class="mb-3">
                  <label class="form-label">Company (Optional)</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
                <div class="mb-3">
                  <label class="form-label">Message (Optional)</label>
                  <textarea type="textarea" class="form-control" placeholder="..." rows="3"></textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-success">Request Catalog</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      <!-- Modal END -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>