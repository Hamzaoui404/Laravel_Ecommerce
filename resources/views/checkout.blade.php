@extends('src.main')
@section('content')
    
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="/">Home</a>
                <a class="breadcrumb-item text-dark" href="/cartlist">Cart List</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
@php
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckouttController;
$total = CartController::showData();
@endphp

<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
            <div class="bg-light p-30 mb-5">
                <form action="{{route('checkout')}}" method="POST" style="all: unset">
                    @csrf
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>First Name</label>
                        <input class="form-control" type="text" placeholder="John" name="first_name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Last Name</label>
                        <input class="form-control" type="text" placeholder="Doe" name="last_name" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail</label>
                        <input class="form-control" type="text" placeholder="example@email.com" name="email" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Mobile No</label>
                        <input class="form-control" type="tel" placeholder="+216 00 000 000" maxlength="14" name="tel" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Address Line </label>
                        <input class="form-control" type="text" placeholder="123 Street" name="adress" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State</label>
                        <select class="custom-select" name="state">
                            <option selected>Ariana</option>
                            <option>Béja</option>
                            <option>Ben Arous</option>
                            <option>Bizerte</option>
                            <option>Gabes</option>
                            <option>Gafsa</option>
                            <option>Jendouba</option>
                            <option>Kairouan</option>
                            <option>Kasserine</option>
                            <option>Kebili</option>
                            <option>Kef</option>
                            <option>Mahdia</option>
                            <option>Mednine</option>
                            <option>Monastir</option>
                            <option>Nabeul</option>
                            <option>Sfax</option>
                            <option>Sidi Bouzid</option>
                            <option>Siliana</option>
                            <option>Sousse</option>
                            <option>Tataouine</option>
                            <option>Tozeur</option>
                            <option>Tunis</option>
                            <option>Zaghouan</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="New York" name="city" required>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ZIP Code</label>
                        <input class="form-control" type="text" placeholder="123" name="Postal-code" required>
                    </div>
                    <div class="col-md-12 form-group">
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <div class="collapse mb-5" id="shipping-address">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping Address</span></h5>
                <div class="bg-light p-30">
                    <div class="row">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <div class="checkout-info" style="display: flex;justify-content:space-between">
                    <h6 class="mb-3">Products</h6>
                    <h6 class="mb-3">Quantity</h6>
                    <h6 class="mb-3">Price</h6>
                </div>
                @foreach ($shippedItems as $shippedItem)
                    
                <div class="d-flex justify-content-between" >
                    <p style="width:95px">{{$products->name}}</p>
                    <input type="hidden" value="{{$products->id}}" name="product_id">
                    <p id="quantity" > {{$quantity->quantity}}</p>
                    <p id="price"><input type="hidden" name="price" value="{{$products->price}}">{{$products->price}} DT</p>
                </div>
                @endforeach
                </div>
                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6 style="margin-left:35px">{{$quantity_order}}</h6>
                        <h6>{{$result}} DT</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">10 DT</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5 ><input type="hidden" name="totalPrice" value="{{$result+10}}"> {{$result+10}} DT</h5>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative  mb-3"><span class="bg-secondary pr-3">Payment when receiving product</span></h5>
                <div class="bg-light p-30">
                    <!--
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal" required>
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck" required>
                            <label class="custom-control-label" for="directcheck">Direct Check</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer" required>
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div>-->
                    <button class="btn btn-block btn-primary font-weight-bold py-3" type="submit">Place Order</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
<!-- Checkout End -->

@endsection
