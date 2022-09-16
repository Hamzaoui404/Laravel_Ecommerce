<?php

namespace App\Http\Controllers;

use App\Models\products;

class ShopController extends Controller
{
    function men(){
        $product=products::where('section','women')->paginate(16);
        return view ('shop',['products'=>$product]);
    }
    function baby(){
        $product=products::where('section','baby')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function women(){
        $product=products::where('section','women')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function pc(){
        $product=products::where('section','pc')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function pcGamer(){
        $product=products::where('section','pcgamer')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function printerScanner(){
        $product=products::where('section','printerscanner')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
   function dataStorage(){
        $product=products::where('section','datastorage')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function accessoriesPerpherals(){
        $product=products::where('section','accessoriesperpherals')->paginate(6);
        return view ('shop',['products'=>$product]);
    }
    function homeAppliance(){
        $product=products::where('section','homeappliance')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function kitchen(){
        $product=products::where('section','Kitchen')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function books(){
        $product=products::where('section','Books')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function groceries(){
        $product=products::where('section','Groceries')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function jewelry(){
        $product=products::where('section','Jewelry')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function parfum(){
        $product=products::where('section','Parfum')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function mobile(){
        $product=products::where('section','Mobile')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function tablette(){
        $product=products::where('section','Tablette')->paginate(6);
        return view ('shop',['products'=>$product]);
    } 
    function shop(){
        $products=products::paginate(5);
        return view ('shop',['products'=>$products]);
    }
}
