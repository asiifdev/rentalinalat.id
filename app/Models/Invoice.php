<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoices';
    protected $guarded = [];

    /**
     * product
     *
     * @return void
     */
    public function product()
    {
        return $this->hasMany(Product::class, 'id');
    }
    /**
     * order
     *
     * @return void
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
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
