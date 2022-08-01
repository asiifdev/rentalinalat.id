<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'products';
    protected $guarded = [];
    // protected $status = [
    //     'Active',
    //     'Unactive'
    // ];

    public static $status = [
		'active' => 'Active',
		'unactive' => 'Unactive',
    ];

    public function category()
    {
       return $this->belongsTo(Category::class, 'category_id');
    }
    public function invoice()
    {
       return $this->belongsTo(Invoice::class, 'product_id');
    }

    public function order()
    {
       return $this->hasMany(Order::class, 'product_id');
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
}
