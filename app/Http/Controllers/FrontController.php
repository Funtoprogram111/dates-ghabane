<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use Cart;

class FrontController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      $products = Product::with('category')->paginate(12);
      $products_filter = DB::table('products')
                    ->latest()
                    ->get();

      /*return response()->json([$products,$products_filter], 404);*/

      return view('welcome', compact('products', 'products_filter'));
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


}
