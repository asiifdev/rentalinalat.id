<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index() {
        $produk = Product::with('category')->get();
        $kategori = Category::whereHas('children')->get();
        $kategoriutama = Category::where('parent_id', null)->get();
        $enum = Product::$status;
        // dd($enum);
        return view('admin.product.index',[
            'produk' => $produk,
            'kategori' => $kategori,
            's' => $kategoriutama,
            'enum' => $enum
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(isset($request->foto))
            {
                $nm = $request->foto;
                $namafile = $nm->getClientOriginalName();

                $product = new Product();
                $product->name = $request->name;
                $product->parent_id = null;
                $product->slug = \Str::slug($request->name);
                $product->foto = $namafile;
                $nm->move(public_path().'/images/produk', $namafile);
                $product->save();
            }
        else
        {
            $product = new Product();
            $product->name = $request->name;
            $product->parent_id = null;
            $product->slug = \Str::slug($request->name);
            $product->foto = 'foto.png';
            $product->save();
        }

        return redirect('admin/product')->with('success','Data added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        
        return redirect('admin/product')->with('success', 'Data Deleted Successfully');
    }

    // public function ajax($cat_id)
    // {
    //     $cat_id = Category::get('category_id');
    //     $subcategories =  Category::where('parent_id','=',$cat_id)->lists('name');
    //     return response()->json($subcategories);
    // }

    public function subCat(Request $request)
    {
         
        $parent_id = $request->cat_id;
         
        $subcategories = Category::where('parent_id',$parent_id)->get();
        // dd($subcategories);
        return response()->json($subcategories);
    }
}
