<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'carts';
    protected $guarded = [];

    // public function order()
    // {
    //     return $this->belongsTo(Order::class, 'cart_id');
    // }

    /**
     * product
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }

    /**
     * product
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
