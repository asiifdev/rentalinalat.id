<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Milon\Barcode\Facades\DNS2DFacade;
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

    public function show($id)
    {
        $show = Product::where('id', $id)->with('category')->get();
        // return response($show);
        // dd($show);
        return view('admin.product.show',[
            'show' => $show
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
                $barcode = DNS2DFacade::getBarcodeSVG($request->kode, 'DATAMATRIX') ;
                $namafile = $nm->getClientOriginalName();
                // $filebarcode = $barcode->getClientOriginalName();

                $product = new Product();
                $product->kode = $request->kode;
                $product->name = $request->name;
                $product->description = $request->description;
                $product->category_id = $request->category_id;
                $product->slug = \Str::slug($request->name);
                $product->dayRate = $request->dayrate;
                $product->status = $request->status; 
                $product->barcode = $barcode;
                $product->foto = $namafile;
                $nm->move(public_path().'/images/produk', $namafile);
                // $barcode->move(public_path().'/images/barcode', $barcode);
                $product->save();
            }
        else
        {
            $barcode = DNS2DFacade::getBarcodeSVG($request->kode, 'DATAMATRIX') ;

            $product = new Product();
            $product->kode = $request->kode;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category_id;
            $product->slug = \Str::slug($request->name);
            $product->dayRate = $request->dayrate;
            $product->status = $request->status;
            $product->barcode = $barcode;
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

    public function subCat(Request $request)
    {
         
        $parent_id = $request->cat_id;
         
        $subcategories = Category::where('parent_id',$parent_id)->get();
        // dd($subcategories);
        return response()->json($subcategories);
    }
}
