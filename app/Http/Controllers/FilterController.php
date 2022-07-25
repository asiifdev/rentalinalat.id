<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function produk($cat){
        $produk = Product::where('category_id', $cat)->with('category')->get();
        $judul = Category::where('id', $cat)->get('name');
        // dd($judul);
        return view('admin.category.showsubcat',[
            'produk' => $produk,
            'judul' => $judul
        ]);
    }

    public function category($subcat){
        $category = Category::where('parent_id',$subcat)->get();
        $judul = Category::where('id',$subcat)->get('name');
        // dd($judul);
        return view('admin.category.showcat', [
            'kategori' => $category,
            'judul' => $judul
        ]);
    }
}
