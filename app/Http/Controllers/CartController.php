<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Checkout;
use App\Models\products;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;

class CartController extends Controller
{
    public function addtocart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->quantity=$req->input(key:'quantity');
            $cart->color=$req->input(key:'color');
            $cart->size=$req->input(key:'size');
            $cart->save();
            return redirect('/');
        } else {
            return redirect ('/login');
        }
    }
    static function showData(){
        if(session()->has('user')){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count(); 
        } else {
             redirect ('/login');
        }}
        function cartlist(){
            if(session()->has('user')){
            $userId=Session::get('user')['id'];
            $quantity = Cart::all('quantity')->first();
            $products= Db::table('cart')
            ->join('products','cart.product_id','=','products.id')->where('cart.user_id',$userId)->select('products.*','cart.id as cart_id')->get();
           
                return view ('cartlist',['products'=>$products,'quantity'=>$quantity]);
            
            }else{
                return redirect ('login');
            }
        }
        function removecart($id){
            Cart::where('product_id',$id)->delete();
            return redirect('cartlist');
        }
    }
    
