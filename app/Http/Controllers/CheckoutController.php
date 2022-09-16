<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Checkout;
use App\Models\orderItems;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    function checkout(Request $req){

      $checkout=new Checkout;
      $checkout->first_name=$req->input('first_name');
      $checkout->last_name=$req->input('last_name');
      $checkout->email=$req->input('email');
      $checkout->adress=$req->input('adress');
      $checkout->telephone=$req->input('tel');
      $checkout->state=$req->input('state');
      $checkout->city=$req->input('city');
      $checkout->postal_code=$req->input('Postal-code');
      $checkout->user_id=Session::get('user')['id'];
      $checkout->save();
      $cartData = DB::table('cart')->get();
      $orderItems= new orderItems();
      foreach($cartData as $item){
        orderItems::create([
          "product_id"=>$item->product_id,
          "price"=>$req->input('price'),
          "user_id"=>session()->get('user')['id'],
          'quantity'=>Cart::all('quantity')->first(),
          Cart::where('product_id',$item->product_id)->delete()
        ]);

  
      }

      return redirect('/');
    }
  
   function checkoutData(){
    if(session()->has('user')){
    $products=DB::table('cart')->join('products','cart.product_id','=','products.id')->select('products.name','products.price','products.id')->first();
    $quantity = Cart::all('quantity')->first();
    $cartData = DB::table('cart')->get();
    $total_order=0;
    $quantity_order=0;
    foreach($cartData as $cart){
      $total_order+=$products->price;
      $quantity_order+=$quantity->quantity;
    }
    $result=$total_order*$quantity_order;
    return view ('/checkout',['quantity'=>$quantity,
    'products'=>$products,
    'shippedItems'=>$cartData,
    'quantity_order'=>$quantity_order,
    'result'=>$result]);
  }
  else {
    return view ('errors.404');
  }
}
}