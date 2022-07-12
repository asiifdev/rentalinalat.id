<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
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
        $this->belongsTo(Category::class);
    }

    public function order()
    {
        $this->belongsTo(Order::class);
    }
}
