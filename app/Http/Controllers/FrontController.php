<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use Cart;
use Auth;

class FrontController extends Controller
{
    public function index(Request $request)
    {
      $user = Auth::user();
      $categories = Category::all();
      $categories_prods = DB::table('categories')
                        ->select('id', 'name')
                        ->orderBy('name', 'asc')
                        ->get();
      $products = Product::with('category')->paginate(12);
      $products_cats = Product::with('category')->get();
      $products_filter = DB::table('products')
                    ->latest()
                    ->get();

      if ($request->ajax() && isset($request->category)) {
            $category = $request->category;
            $Products = Product::with('category')->whereIn('category_id', explode(',', $category))->take(6);
            dd($Products);
            response()->json($Products);
            return view('welcome', compact('products', 'products_filter','user', 'products_cats', 'categories_prods', 'Products'));
        } else {
            $Products = Product::with('category')->take(6);
            return view('welcome', compact('products', 'products_filter','user', 'products_cats', 'categories_prods', 'Products'));
        }

      /*return response()->json($categories_prods);*/

      return view('welcome', compact('products', 'products_filter','user', 'products_cats', 'categories_prods', 'Products'));
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
