<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Order;
use App\Models\User;
use App\Models\Address;
use App\Models\Message;
use App\Mail\OrderShipped;
use Mail;
use DB;
use Auth;
use Toastr;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
      $prods = Product::all();
      $cats = Category::all();
      $orders = Order::all();
      $addresses = Address::all();
      $emails = Message::all();
      $users = User::all();

      $tables = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->join('products', 'products.id', '=', 'products.category_id')
            ->join('categories', 'categories.id', 'products.category_id')
            ->join('order_product', 'orders.id', '=', 'order_product.order_id')
            ->where('delivered', '=', 0)
            ->orderBy('orders.created_at', 'asc')
            ->latest('orders.created_at')
            ->get();

      $delivered = DB::table('orders')
            ->join('users', 'users.id', '=', 'orders.user_id')
            ->join('products', 'products.id', '=', 'products.category_id')
            ->join('categories', 'categories.id', 'products.category_id')
            ->join('order_product', 'orders.id', '=', 'order_product.order_id')
            ->where('delivered', '=', 1)
            ->orderBy('orders.created_at', 'asc')
            ->latest('orders.created_at')
            ->get();

      $wishlistData = DB::table('wishlists')
            ->join('products', 'products.id', '=', 'wishlists.product_id')
            ->join('users', 'users.id', '=', 'wishlists.user_id')
            ->Join('categories', 'categories.id' , '=' ,'products.category_id')
            ->select('products.*', 'categories.name as categories_name', 'products.name as products_name', 'products.id as products_id', 'users.*', 'users.name')
            ->orderBy('wishlists.created_at', 'asc')
            ->get();
      /*return response()->json($wishlistData);*/
      return view('admin.dashboard', compact('prods','cats','orders','addresses', "tables", "emails", "users", "delivered", 'wishlistData'));

    }

    public function toggledeliver(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);
        if($request->has('delivered')){
            $time=Carbon::now()->addMinute(1);
            Mail::to($order->user)->later($time,new OrderShipped($order));
            $order->delivered = $request->delivered;
        }else{
            Toastr::error('Your item is not delivered !' ,'OOOOPS !');
            $order->delivered = "0";
        }

        $order->save();
        Toastr::success('Your item have been successfully delivered !' ,'Congratulations !');
        Toastr::success('please check your email - we have sent a confirmation message!' ,'Congratulations !');
        return redirect()->back();
    }

    public function deleteItem($id) {
        DB::table('wishlists')->where('product_id', '=', $id)->delete();
        Toastr::success('Your item have been removed from Wishlist successfully !' ,'Congratulations !');
        return redirect()->back();
    }

}
