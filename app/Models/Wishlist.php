<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Wishlist extends Model
{
    protected $table = "wishlists";

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];


    public function product()
    {
      return $this->belongsTo(Product::class);
    }


    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
