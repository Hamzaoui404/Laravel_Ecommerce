@extends('src.main')
@section('content')
@php
use App\Http\Controllers\CartController;
$total = CartController::showData();
@endphp

<div class="container">
  <table id="cart" class="table table-hover table-condensed">
    <thead>
      <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
        <th style="width:8%">Quantity</th>
        <th style="width:22%" class="text-center"></th>
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($products as $product)
        <td data-th="Product" style="width:200px">
          <div class="row">
            <div class="col-sm-2 hidden-xs"><img src="{{$product->image}}" width="120" height="130" class="img-responsive" /></div>
            <div class="col-sm-7" style="margin-left: 35px">
              <input type="hidden" name="product_name" value{{$product->name}} >
              <a href="/product/{{$product->id}}"class=" text-decoration-none text-truncate"><h5 style=' white-space: pre-line;' max >{{$product->name}}</h5></a>
              <p>{{$product->short_description}}</p>
            </div>
          </div>
        </td>
          <td data-th="Price" id="price">{{$product->price}} DT</td>
        <td data-th="Quantity" class="text-center" id="total" name="price">{{$quantity->quantity}}</td>
        <td class="actions" data-th="">
          <button class="btn btn-danger btn-sm" onclick="window.location.href='/removecart/{{$product->id}}'" ><i class="fa fa-trash"></i></button>
        </td>
      </tr>
     
      @endforeach

    </tbody>
    <tfoot>
      <tr class="visible-xs">
        <td class="text-center" ><strong >items number : {{$total}} </strong></td>
      </tr>
      <tr>
        <td><a href="/" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
        <td colspan="2" class="hidden-xs"></td>
        <td> <button style="all: unset" type="submit"> <a href="checkout" class="btn btn-success"><i class="fas fa-cart-arrow-down"></i> Proceed To Checkout</a></td></button>
        <td colspan="3" class="hidden-xs"></td>
      </tr>
    </tfoot>
  </table>
</div>
<script>
  function calcul(){
      const price = parseInt(document.getElementById("price").innerHTML);
 
      let quantity = document.getElementById("quantity").value;
      value = price*quantity;
      document.getElementById('total').innerHTML=value+" DT";
     }
     
  
 </script>

@endsection