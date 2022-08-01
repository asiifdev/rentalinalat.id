<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    // public function cart()
    // {
    //     return $this->hasMany(Cart::class, 'id');
    // }

    /**
     * invoice
     *
     * @return void
     */
    public function invoices()
    {
        return $this->belongsTo(Invoice::class, 'invoice_id');
    }

    /**
     * reviews
     *
     * @return void
     */
    public function reviews()
    {
        return $this->hasMany(Review::class);
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
}
