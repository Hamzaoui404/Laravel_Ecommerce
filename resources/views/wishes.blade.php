@extends('src.main')
@section('content')
<div class="container">
  <table id="cart" class="table table-hover table-condensed">
    <thead>
      <tr>
        <th style="width:50%">Product</th>
        <th style="width:10%">Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($products as $product)
            
        <td data-th="Product">
          <div class="row">
            <div class="col-sm-2 hidden-xs"><img src="{{$product->image}}" width="120" height="130" class="img-responsive" /></div>
            <div class="col-sm-7" style="margin-left: 35px">
             <a style="text-decoration:none" href="/product/{{$product->id}}"><h5 >{{$product->name}}</h5></a> 
              <p>{{$product->short_description}}</p>
            </div>
          </div>
        </td>
        <td data-th="Price" id="price">{{$product->price}} DT</td>
        <td class="actions" data-th="">
          <button class="btn btn-danger btn-sm" onclick="window.location.href='/removewish/{{$product->id}}'" ><i class="fa fa-trash"></i></button>
        </td>
      </tr>
     
      @endforeach

    </tbody>
  </table>
</div>

@endsection