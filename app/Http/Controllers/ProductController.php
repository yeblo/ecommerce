<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
// use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Auth;
// use Session;
class ProductController extends Controller
{
    //

    function index(){
        $data= Product::all();
      
        return view('products',['products'=> $data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail',['products' => $data]);
    }

    function search(Request $req){
       
        //return $req->input();
         $data = Product:: where('name', 'like','%'.$req->input('forsearch').'%')->get();
         return view('search',['products'=> $data]);
    }

    function addToCart(Request $req){
        // $data = $req->session()->all();
        // return view('login',['products' => $data]);
    //   return $req->session()->put('key','value');
    //  if(Auth::user()->name){
    //      return "Hello";
    //  }
     if(Auth::user()->name)
      {
          $cart = new Cart;
          $cart->user_id = Auth::user()->id;
          $cart->product_id=$req->product_id;
          $cart->save();
          return redirect("/home");
      }
      else{
        return redirect("/login");
      }
    }

    static function cartItem()
    {  
    $userId= Auth::user()->id;
    return Cart::where('user_id', $userId) ->count();
    }


    static function cartList()
    {  
        $userId= Auth::user()->id;
        $products = DB::table('cart') ->join('products','cart.product_id','=','products.id')
                                      ->where('cart.user_id',$userId)
                                      ->select('products.*','cart.id as cart_id')
                                      ->get();
        // return "Hello";
        return view('cartlist',['products'=>$products]);
    }


     function removeCart($id)
    {  
        Cart::destroy($id);
        return redirect('cartlist');
    }

    static function totalOrder()
    {  
        $userId= Auth::user()->id;
        $products_total = DB::table('cart') ->join('products','cart.product_id','=','products.id')
                                      ->where('cart.user_id',$userId)
                                      ->sum('products.price');
        // return "Hello";
        return $products_total;
    }

}
