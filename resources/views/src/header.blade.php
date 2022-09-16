<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MultiShop - Online Shop Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    @php
        use App\Http\Controllers\CartController;
        use App\Http\Controllers\HomeController;
        $total = CartController::showData();
        $wishesTotal = HomeController::wishesCount();
    @endphp
        <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-1 px-xl-5">
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    @if (Session::has('user'))
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user" style="padding: 0px 3px"></i>{{Session::get('user')['username']}}</button>
                        <div class="dropdown-menu dropdown-menu-right ps-0">
                            <button class="dropdown-item" type="button" onclick="window.location.href='/logout'">Log out</button>
                        </div>
                    </div>
                        
                    @else
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user" style="padding: 0px 6px"></i>My Account</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button" onclick="window.location.href='/login'">Sign in</button>
                            <button class="dropdown-item" type="button" onclick="window.location.href='/register'">Sign up</button>
                        </div>
                    </div>

                    @endif
                    <div class="btn-group" style="margin:0px 0px 0px 6px">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown"><i class="fas fa-globe"></i> Language </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><img src="img/frensh.png" alt="" width="17px" style="position: relative;right:5px"> FR</button>
                            <button class="dropdown-item" type="button"><img src="img/english.png" alt="" width="17px" style="position: relative;right:5px"> EN</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="cartlist"class="btn px-0 ml-2">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">{{$total}}</span>
                    </a>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="wishes" class="btn px-0 ml-2">
                    <i class="fas fa-heart text-dark"></i>
                   <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">{{$wishesTotal}}</span>
                </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4" >
                <a href="" class="text-decoration-none">
                    <span class="h1 text-uppercase text-primary bg-dark px-2">Tunisia</span>
                    <span class="h1 text-uppercase text-dark bg-warning px-2 ml-n1">Bazaar</span>
                </a>
            </div>
            <div class="col-lg-4 col-6 text-left">
                <form action="/search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products" name="search">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <button style="all:unset" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+216 50 349 469</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-dark mb-30">
        <div class="row px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn d-flex align-items-center justify-content-between bg-warning w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                    <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                    <div class="navbar-nav w-100">
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="/shop/men" class="dropdown-item">Men's Dresses</a>
                                <a href="/shop/baby" class="dropdown-item">Women's Dresses</a>
                                <a href="/shop/women" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Computers <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="/shop/pc" class="dropdown-item">Pc</a>
                                <a href="/shop/pcgamer" class="dropdown-item">Pc Gamer</a>
                                <a href="/shop/pcgamer" class="dropdown-item">Printers & Scanners</a>
                                <a href="/shop/datastorage" class="dropdown-item">Data Storage</a>
                                <a href="/shop/accessories" class="dropdown-item">Peripherals & Accessories</a>
                            </div>
                        </div>
                        <div class="nav-item dropdown dropright">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kitchen & Appliance <i class="fa fa-angle-right float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute rounded-0 border-0 m-0">
                                <a href="/shop/appliance" class="dropdown-item">Home Appliance</a>
                                <a href="/shop/kitchen" class="dropdown-item">Kitchen</a>
                            </div>
                        </div>
                        <a href="/shop/books" class="nav-item nav-link">Books</a>
                        <a href="/shop/groceries" class="nav-item nav-link">Groceries</a>
                        <a href="/shop/jewelry" class="nav-item nav-link">Jewelry</a>
                        <a href="/shop/parfum" class="nav-item nav-link">Parfum </a>
                        <a href="/shop/mobile" class="nav-item nav-link">Mobile</a>
                        <a href="/shop/tablette" class="nav-item nav-link">Tablette</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                    <a href="/home" class="text-decoration-none d-block d-lg-none">
                        <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                        <span class="h1 text-uppercase text-light bg-warning px-2 ml-n1">Shop</span>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="/" class="nav-item nav-link active">Home</a>
                            <a href="/shop" class="nav-item nav-link">Shop</a>
                            @if (session()->has('user'))

                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                                    <div class="dropdown-menu bg-warning rounded-0 border-0 m-0">
                                        <a href="/cartlist" class="dropdown-item">Shopping Cart</a>
                                        <a href="/checkout" class="dropdown-item">Checkout</a>
                                    </div>
                                </div>
                            @endif
                            <a href="/contact" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                            <a href="wishes" class="btn px-0">
                                <i class="fas fa-heart text-warning"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">{{$wishesTotal}}</span>
                            </a>
                            <a href="/cartlist" class="btn px-0 ml-3">
                                <i class="fas fa-shopping-cart text-warning"></i>
                                <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">{{$total}}</span>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

