@extends('src.main')
@section('content')
    
<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item position-relative active" style="height: 430px;">
                        <img class="position-absolute w-150 h-150" src="img/carousel-1.jpg" style="height:120%">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Men Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/men">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Women Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/women">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item position-relative" style="height: 430px;">
                        <img class="position-absolute w-100 h-100" src="img/carousel-3.jpg" style="object-fit: cover;">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;">
                                <h1 class="display-4 text-white mb-3 animate__animated animate__fadeInDown">Kids Fashion</h1>
                                <p class="mx-md-5 px-5 animate__animated animate__bounceIn">Lorem rebum magna amet lorem magna erat diam stet. Sadips duo stet amet amet ndiam elitr ipsum diam</p>
                                <a class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp" href="/shop/baby">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="shop/women" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
            <div class="product-offer mb-30" style="height: 200px;">
                <img class="img-fluid" src="img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="/shop/men" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Featured Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-check text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-shipping-fast text-primary m-0 mr-2"></h1>
                <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fas fa-exchange-alt text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
            <div class="d-flex align-items-center bg-light mb-4" style="padding: 30px;">
                <h1 class="fa fa-phone-volume text-primary m-0 mr-3"></h1>
                <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
            </div>
        </div>
    </div>
</div>
<!-- Featured End -->


<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/men">
                <div class="cat-item d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/men-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Men's Fashion </h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/women">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Women's Fashion
                        </h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/baby">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/baby-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Baby's Dresses</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/books">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/book-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Books</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/groceries-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Groceries</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/jewerly">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/jawerly-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Jewelry</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/parfum">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/parfum-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Parfum</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/mobile">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/mobile-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Mobile</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="/shop/tablette">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/tablette-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Tablette</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/computer-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>HighTech</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/kitchen-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Kitchen</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
            <a class="text-decoration-none" href="">
                <div class="cat-item img-zoom d-flex align-items-center mb-4">
                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                        <img class="img-fluid" src="img/appliance-1.jpg" alt="">
                    </div>
                    <div class="flex-fill pl-3">
                        <h6>Home Appliance</h6>
                        <small class="text-body">100 Products</small>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Categories End -->


<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Our Features Products</span></h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
        @foreach ($products as $product)
            <div class="product-item bg-light mb-4" style="overflow: hidden">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{$product->image}}" alt="" style="width:150px;height:250px">
                    <div class="product-action">
                        <form action="{{route('wishes')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$product->id}} " name="product_id">
                           <button style=" all: unset;" type="submit"><a class="btn btn-outline-dark btn-square" ><i  class="far fa-heart"></i></a></button> 
                        </form>
                        <a class="btn btn-outline-dark btn-square" href="{{route('product',['id'=>$product->id])}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>{{$product->price}} DT</h5><h6 class="text-muted ml-2"><del>{{$product->old_price}} DT</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
            @endforeach
    </div>
</div>
</div>
<!-- Products End -->


<!-- Offer Start -->
<div class="container-fluid pt-5 pb-3">
    <div class="row px-xl-5">
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="img/offer-1.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="product-offer mb-30" style="height: 300px;">
                <img class="img-fluid" src="img/offer-2.jpg" alt="">
                <div class="offer-text">
                    <h6 class="text-white text-uppercase">Save 20%</h6>
                    <h3 class="text-white mb-3">Special Offer</h3>
                    <a href="" class="btn btn-primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Offer End -->


<!-- Products Start -->

<div class="container-fluid pt-5 pb-3">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Women Dresse</span></h2>
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel related-carousel">
        @foreach ($productsWomen as $product)
        @if ($product->section=="Women" || $product->section=="women")
            <div class="product-item bg-light mb-4" style="overflow: hidden">
                <div class="product-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{$product->image}}" alt="" style="width:150px;height:250px">
                    <div class="product-action">
                        <form action="{{route('wishes')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$product->id}} " name="product_id">
                           <button style=" all: unset;" type="submit"><a class="btn btn-outline-dark btn-square" ><i  class="far fa-heart"></i></a></button> 
                        </form>
                        <a class="btn btn-outline-dark btn-square" href="{{route('product',['id'=>$product->id])}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                    <div class="d-flex align-items-center justify-content-center mt-2">
                        <h5>{{$product->price}} DT</h5><h6 class="text-muted ml-2"><del>{{$product->old_price}} DT</del></h6>
                    </div>
                    <div class="d-flex align-items-center justify-content-center mb-1">
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small class="fa fa-star text-primary mr-1"></small>
                        <small>(99)</small>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
    </div>
</div>
</div>
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Men Dresse</span></h2>
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel related-carousel" >
            @foreach ($products as $product)
            @if ($product->section=="Men" || $product->section=="men")
                <div class="product-item bg-light mb-4" style="overflow: hidden">
                    <div class="product-img position-relative overflow-hidden" >
                        <img class="img-fluid w-100" src="{{$product->image}}" alt="" style="width:150px;height:250px">
                        <div class="product-action">
                                    <form action="{{route('wishes')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$product->id}} " name="product_id">
                               <button style=" all: unset;" type="submit"><a class="btn btn-outline-dark btn-square" ><i  class="far fa-heart"></i></a></button> 
                            </form>
                            <a class="btn btn-outline-dark btn-square" href="{{route('product',['id'=>$product->id])}}"><i class="fa fa-search"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>{{$product->price}} DT</h5><h6 class="text-muted ml-2"><del>{{$product->old_price}} DT</del></h6>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small class="fa fa-star text-primary mr-1"></small>
                            <small>(99)</small>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
    </div>
</div>
</div>
<h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Peripherals & Accessories</span></h2>
<div class="row px-xl-5">
    <div class="col">
        <div class="owl-carousel related-carousel">
    @foreach ($productsWomen as $product)
    @if ($product->section=="AccessoriesPerpherals" || $product->section=="AccessoriesPerpherals")
        <div class="product-item bg-light mb-4" style="overflow: hidden">
            <div class="product-img position-relative overflow-hidden">
                <img class="img-fluid w-100" src="{{$product->image}}" alt="" style="width:150px;height:250px">
                <div class="product-action">
                    <form action={{route('addtocart')}} method="POST" >
                        @csrf
                        <input type="hidden" name="quantity" value="1" class="qty">
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button style="all:unset" type="submit"><a class="btn btn-outline-dark btn-square" ><i class="fa fa-shopping-cart"></i></a></button> 
                    </form>
                    <form action="{{route('wishes')}}" method="POST">
                        @csrf
                        <input type="hidden" value="{{$product->id}} " name="product_id">
                       <button style=" all: unset;" type="submit"><a class="btn btn-outline-dark btn-square" ><i  class="far fa-heart"></i></a></button> 
                    </form>
                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                    <a class="btn btn-outline-dark btn-square" href="{{route('product',['id'=>$product->id])}}"><i class="fa fa-search"></i></a>
                </div>
            </div>
            <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href="">{{$product->name}}</a>
                <div class="d-flex align-items-center justify-content-center mt-2">
                    <h5>{{$product->price}} DT</h5><h6 class="text-muted ml-2"><del>{{$product->old_price}} DT</del></h6>
                </div>
                <div class="d-flex align-items-center justify-content-center mb-1">
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small class="fa fa-star text-primary mr-1"></small>
                    <small>(99)</small>
                </div>
            </div>
        </div>
        @endif
        @endforeach
</div>
</div>
</div>

</div>
<!-- Products End -->

<!-- Vendor Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col">
            <div class="owl-carousel vendor-carousel">
                <div class="bg-light p-4">
                    <img src="img/vendor-1.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-2.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-3.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-4.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-5.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-6.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-7.jpg" alt="">
                </div>
                <div class="bg-light p-4">
                    <img src="img/vendor-8.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vendor End -->
<script>
    // color change when click on heart icon on card 
    function change(){
        document.getElementById("dantee").style.color = "red";
    }

</script>
@endsection