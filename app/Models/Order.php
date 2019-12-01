<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;
use Cart;
use Auth;

class Order extends Model
{
    protected $table = "orders";

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    /**
     * Get the user's first name.
     *
     * @param  string  $value
     * @return string
     */
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    /**
    * Get the user that owns the phone.
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * The roles that belong to the user.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class)->withPivot('qty', 'total');
    }

    public static function createOrder(){
        $user=Auth::user();
        $order=$user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);
        $cartItems=Cart::content();
        foreach ($cartItems as $cartItem){
            $order->products()->attach($cartItem->id,[
                'qty'=>$cartItem->qty,
                'total'=>$cartItem->qty*$cartItem->price
            ]);
        }
    }
}
