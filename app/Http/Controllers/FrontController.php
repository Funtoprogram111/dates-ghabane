<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Wishlist;
use DB;
use Cart;
use Auth;

class FrontController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->q;
        $user = Auth::user();
        $categories = Category::all();
        $products = Product::with('category')
                  ->where('products.name', 'like', '%' .$q. '%')
                  ->orWhere('categories.name', 'like', '%' .$q. '%')
                  ->leftJoin('categories', 'categories.id' , '=' ,'products.category_id')
                  ->select('products.*', 'categories.name as categories_name', 'products.name as products_name')
                  ->paginate(12);
        $products_filter = DB::table('products')
                      ->latest()
                      ->get();

        // return response()->json($products);
        /*$products_search = DB::table('products')
                ->join('categories', 'categories.id', 'products.category_id')
                ->where('products.name', 'like', '%' .$q. '%')
                ->get();*/

        return view('welcome', compact('products', 'products_filter','user'));

    }

    public function cart()
    {
      $cartItems = Cart::content();
      return view('frontend.cart', compact('cartItems'));
    }

    public function addItem($id)
    {
        $products = Product::findOrFail($id);
        Cart::add(array(

                    'id' => $id,
                    'name' => $products->name,
                    'qty' => 1,
                    'price' => number_format((float) $products->price, 2, '.', ' '),
                    'options' => array(

                      'image' => $products->image,

                    ),
              ));
        return redirect()->route('cart.index')->with('status', 'Your product have been added successfully in your cart !');
    }

    public function deleteItem($id)
    {
        Cart::remove($id);
        return back()->with('status', 'Your product have been deleted successfully !');
    }

    public function updateItem(Request $request, $id)
    {
        Cart::update($id, $request->qty);
        return back()->with('status', 'Your quantity have been updated successfully in your cart !');
    }

    public function getProductById($param)
    {
      $product = Product::where('id', $param)
                          ->orWhere('slug', $param)
                          ->first();
      $randomProducts = DB::table('products')
                ->inRandomOrder()
                ->get();
      return view('frontend.product_details', compact('product', 'randomProducts'));
    }

    public function addItemToWishlist(Request $request)
    {
      $wishlists = new Wishlist;
      $wishlists->user_id = Auth::user()->id;
      $wishlists->product_id = $request->product_id;
      $wishlists->save();
      return back()->with('status', 'Your product have been added successfully in your wishlist !');
    }


}
