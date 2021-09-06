<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Cart;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::all();
    return view('products.index', compact('products'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('products.detail', compact('product'));
    }

    public function search(Request $request){
        $searchResult = Product::where('name', 'like', '%'.$request->input('query').'%')->get();
        return view('products.search', compact('searchResult'));
       //return $searchResult;

    }

    public function addToCart(Request $request){
        if(auth()->user()){
            $cart = new Cart();
            $cart->user_id = auth()->user()->id;
            $cart->product_id = $request->product_id;
            $cart->save();
            return  redirect('/products');
        }
        else{
            return redirect('/login');
        }

    }

    static function CartItem(){
 
        $userId = auth()->user()->id;
        return Cart::where('user_id', $userId)->count(); 
    }

    public function cartList(){
        $userId = auth()->user()->id;
        $products = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.*')
        ->get();

        return view('products.cartlist',['products' => $products]);
    }
}
