<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $guarded = [];

    public function product()
    {
        $this->hasMany(Product::class);
    }

    public function customer()
    {
        $this->belongsTo(Customer::class);
    }
}
