<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Auth;
use DB;
use Session;

class CheckoutController extends Controller
{
    public function formCheckout(Request $request)
    {

      /*Session::flash('access', "You can\'t enter this page - not logged in !");*/

      /*Order::createOrder());*/
/*      $order = Order::findOrFail(Auth::id());
      $order->products()->attach($order);*/
      /*dd($users = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->join('products', 'users.id', '=', 'products.category_id')
            ->join('order_product', 'order_product.id', '=', 'products.id')
            ->get());
      dd($orders = DB::table('orders')
                ->orderByRaw('updated_at - created_at DESC')
                ->get());*/
      /*return response()->json(Auth::user()->addresses()->get());*/
      return view('frontend.checkout');
    }


}
