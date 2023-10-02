@extends('landing.index')

@section('content')
    <!-- Header start -->
    <div class="container-fluid conwel text-center">
        <h5>Welcome to Our Home</h5>
        <h1 class="display-4">Provider of High Quality Coconut Product</h1>
    </div>
    <!-- Header End -->
    <!-- About Us start-->
    <div class="container-fluid bg-green text-center" id="about" style="padding: 50px 0;">
        <div class="container text-center">
        <div class="row align-items-center">
            <div class="col-md-6 text-center mb-3">
            <img src="Assets/image.png" class="img-fluid" alt="..." style="max-width: 18rem;">
            </div>
            <div class="col-md-6 text-center">
            <h5 style="color: white;">Get Closer <span style="color: #D6A676;">With Us</span> </h5>
            <hr class="custom-hr" style="border-color: #D6A676; border-width: 2px; margin-top: 0; margin-bottom: 20px;">
            <p class="content-text">
                At Coco Taru Indonesia, we leverage Indonesia's impeccable reputation as a leading coconut producer to deliver premium-quality coconuts sourced from its fertile landscapes and ideal growing conditions. Our meticulous cultivation practices ensure that our coconuts possess an unrivaled combination of taste, aroma, and texture. With a strong commitment to sustainability and fair trade, we guarantee a steady supply of exceptional coconuts, providing our customers with a true taste of tropical paradise.
            </p>

            <div class="container-sm text-center">
                <div class="row align-items-center">
                <div class="col-md-6 text-center rounded-pill" style="background-color: #D6A676;">
                    <a class="btn btn-more" href="#">MORE ABOUT US</a>
                </div>
                <div class="col-md-6 text-center">
                    <a href="#"><h5 style="color: #D6A676; text-decoration: underline;">Check Our Products</h5></a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- About us end -->

    <!-- Our Products start -->
    <div class="container-fluid text-center bg-putih" id="products" style="padding: 50px 0;">
        <div class="row">
        <div class="col">
            <h5 class="color-text">Our Products</h5>
            <hr class="custom-hr2" style="border-color: #A16500; border-width: 2px; margin-top: 0; margin-bottom: 20px;">
            <p class="text-center pb-5 color-text" style="font-size: large;">Discover the perfect product and create a delightful business experience for your customers</p>
        </div>
        </div>
    <!-- card start -->
        <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                <div class="card bg-transparent border-0 text-center">
                <img src="Assets/image.png" class="card-img-top img-fluid" alt="..." style="height: 200px; width: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title color-text">Coconut Charcoal Briquette</h5>
                </div>
                <a class="btn btn-products rounded-pill color-text" href="#" role="button">See Details</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                <div class="card bg-transparent border-0 text-center">
                <img src="Assets/image_1.png" class="card-img-top img-fluid" alt="..." style="height: 200px; width: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title color-text">Wood Pellets</h5>
                </div>
                <a class="btn btn-products rounded-pill color-text" href="#" role="button">See Details</a>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center">
                <div class="card bg-transparent border-0 text-center">
                <img src="Assets/image_2.png" class="card-img-top img-fluid" alt="..." style="height: 200px; width: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title color-text">Coco Fiber</h5>
                </div>
                <a class="btn btn-products rounded-pill color-text" href="#" role="button">See Details</a>
            </div>
            </div>
        </div>
        </div>

        <div class="container mt-3">
        <div class="row">
            <div class="col">
            <!-- Button trigger modal start-->
            <button type="button" class="btn btn-products rounded-pill color-text" data-bs-toggle="modal" data-bs-target="#CatalogRequest">
                Catalog Requests <i class="fa-solid fa-folder-open" style="color: #ffffff;"></i>
            </button>
            <!-- Button trigger modal end-->
            </div>
        </div>
        </div>
    <!-- card end -->
    </div>
    <!-- Our Products End -->

    <!-- Our Values Start -->
    <div class="container-fluid text-center bg-green" id="values" style="padding: 50px 0;">
        <div class="row">
        <div class="col">
            <h5 style="font-size: 25px; color: #ffffff;">Our Values</h5>
            <hr class="custom-hr" style="border-color: #D6A676; border-width: 2px; margin-top: 0; margin-bottom: 20px;">
            <p class="content-text" style="font-size: large;">Why you need to choose Coco Taru Indonesia?</p>
        </div>
        </div>
        <div class="container-sm text-center">
        <div class="row justify-content-md-center mt-3">
            <div class="col-md-auto d-flex justify-content-center">
            <div class="card bg-transparent border-0 text-center">
                <img src="Assets\folder(4).png" class="card-img-top img-fluid" alt="..." style="height: 150px; width: 150px; object-fit: cover;">
                <div class="card-body">
                <p class="card-text content-text">We provide you personalized strategies that enhance your brand, resonate with your target market, and provide a distinct competitive advantage in the global marketplace.</p>
                </div>
            </div>
            </div>
            <div class="col-md-auto d-flex justify-content-center">
            <div class="card bg-transparent border-0 text-center">
                <img src="Assets\quality.png" class="card-img-top img-fluid" alt="..." style="height: 150px; width: 150px; object-fit: cover;">
                <div class="card-body">
                <p class="card-text content-text">We maintain exceptional standards, providing our customers with consistently superior products that meet their exact specifications.</p>
                </div>
            </div>
            </div>
            <div class="col-md-auto d-flex justify-content-center">
            <div class="card bg-transparent border-0 text-center">
                <img src="Assets\folder(3).png" class="card-img-top img-fluid" alt="..." style="height: 150px; width: 150px; object-fit: cover;">
                <div class="card-body">
                <p class="card-text content-text">We employ seamless supply chain management, which prevents you from delays and optimizes your business operations</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Our Values End -->

    <!-- Gallery Section start -->
    <div class="container-fluid text-center bg-putih" id="gallery" style="padding: 50px 0;">
        <div class="row">
        <div class="col">
            <h5 style="font-size: 25px; color: #A16500;">Gallery</h5>
            <hr class="custom-hr2" style="border-color: #A16500; border-width: 2px; margin-top: 0; margin-bottom: 20px;">
        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="Assets/features1.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/features2.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/features3.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/coconut1.jpeg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
        </div>
        </div>
        <div class="row">
        <div class="col">
            <img src="Assets/type/cube.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/type/dome.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/type/finger.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
            <img src="Assets/type/siab.jpg" style="width: 200px;height: 230px;" class="img-thumbnail" alt="...">
        </div>
        </div>
    </div>
    <!-- Gallery Section End -->
    
    <!-- question section start -->
    <div class="container-fluid text-center bg-green" id="contacts" style="padding: 70px 0;color: white;">
    <h5>Have a Question?</h5>
    <h2>Our Team is Here to Help You!</h2>
    <a class="btn btn-more rounded-pill"  href="#">Start Conversation</a>
    </div>
    <!-- question section end -->

    <!-- Form section start -->
    <div class="container-fluid py-5 text-center bg-putih" style="padding: 50px 0;color: #A16500;">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-8 bg-putih">
        <div class="text-center bg-putih">
            <h5 style="font-size: 25px; color: #A16500;">Contact Us</h5>
            <hr class="custom-hr">
            <p style="padding-top: 20px;">Write your note and let's begin our consultation on coconut products!</p>

            <form>
            <div class="mb-3">
                <input type="email" class="form-control border-warning border-3" placeholder="Your Phone Name">
            </div>
            <div class="row mb-3">
                <div class="col">
                <input type="text" class="form-control border-warning border-3" placeholder="Your Email">
                </div>
                <div class="col">
                <input type="text" class="form-control border-warning border-3" placeholder="Your Phone Number">
                </div>
            </div>
            <div class="mb-3">
                <textarea class="form-control border-warning border-3" rows="5" placeholder="Explain Your Need Here!"></textarea>
            </div>
            <button type="submit" class="btn btn-products rounded-pill color-text">Send Message</button>
            </form>

            <div class="row justify-content-center py-5">
            <div class="col text-center">
                <img src="Assets/Office.png" class="img-fluid mb-1" alt="..." style="width: 50px; height: auto;">
                <h5>CV. COCO TARU INDONESIA</h5>
                <p>Kisoreng street 1A, Blora, Indonesia, 58219</p>
                <p>Phone : <span style="color: black;">(+62) 85217099827</span></p>
                <p>Email : <span style="color: black;">cocotaruindonesia@gmail.com</span></p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- form section end -->
@endSection