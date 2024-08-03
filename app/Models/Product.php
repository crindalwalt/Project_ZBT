<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function media()
    {
        return $this->hasMany(ProductMedia::class);
    }

    public function reviews()
    {
        return $this->hasMany(ProductReviews::class);
    }

    public function cartitem()
    {
        return $this->hasMany(CartItem::class);
    }
    public function orders(){
        return $this->hasMany(OrderDetail::class);
    }

    public function address(){
        return $this->belongsTo(UserAddress::class,"user_address_id");
    }
}
