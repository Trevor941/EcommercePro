<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product; 
use App\Models\Cart;
use App\Models\Order;

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
        ->select('products.*', 'cart.id as cart_id')
        ->get();

        return view('products.cartlist',['products' => $products]);
    }

    public function removeCart($id){
        Cart::destroy($id);
        return redirect()->back();
    }

    public function OrderNow(){
        $userId = auth()->user()->id;
        $total = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->sum('products.price');
        

        return view('products.ordernow',['total' => $total]);
    }

    public function orderplace(Request $request){
        $userId = auth()->user()->id;
        $allCart = Cart::where('user_id', $userId)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'pending';
            $order->payment_method = $request->payment;
            $order->payment_status = 'pending';
            $order->address = $request->address;
            $order->save();
            Cart::where('user_id', $userId)->delete();
           
        }
        return redirect('/');

    }

    public function myorders(){
        $userId = auth()->user()->id;
        $myorders = DB::table('orders')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.user_id', $userId)
        ->get();

        return view('products.myorders',['myorders' => $myorders]);
    }
}
