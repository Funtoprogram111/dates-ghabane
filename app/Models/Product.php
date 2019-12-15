<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Order;
use App\Models\Wishlist;

class Product extends Model
{

    protected $table = "products";


    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = str_slug($value);
    }

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
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * The users that belong to the role.
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withTimestamps();
    }

    public function wishlists()
    {
        return $this->hasMany(Wishlist::class);
    }

}
