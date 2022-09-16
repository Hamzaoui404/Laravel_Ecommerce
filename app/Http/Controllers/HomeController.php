<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\wish;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(){
   $products = DB::table('products')->skip(0)->take(8)->get();
   $productsWomen = DB::table('products')->get();
    return view ('home',compact('products','productsWomen'));
    }
    public function single_product($id){
        $data = DB::table('products')->find($id);
        $cartData= DB::table('products')->get();
        return view ('product',['product'=>$data,'cartData'=>$cartData]);

    }
    public function wishes(Request $req){
        if($req->session()->has('user')){
        $wishes = new wish;
        $wishes->user_id=$req->session()->get('user')['id'];
        $wishes->product_id=$req->input('product_id');
        $wishes->save();
        return redirect('/');
    }
    else{
        return redirect ('/login');

    }
}
    static function wishesCount(){
        if(session()->has('user')){
        $userId=Session::get('user')['id'];
        return wish::where('user_id',$userId)->count(); 
        } else {
             redirect ('/login');
        }}
        function cartlist(){
            if(session()->has('user')){
            $userId=Session::get('user')['id'];
            $products= Db::table('wishes')
            ->join('products','wishes.product_id','=','products.id')->where('wishes.user_id',$userId)->select('products.*','wishes.id as wishes_id')->get();
            return view ('wishes',['products'=>$products]);
            }else{
                return redirect ('login');
            }
        }
        function removewish($id){
            wish::where('product_id',$id)->delete();
            return redirect('wishes');
        }
 function search(Request $req){
    $data= products::where('name','like','%'.$req->input('search').'%')->paginate(10);
     return view ('shop',['products'=>$data]);
 }

    }




