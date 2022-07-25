<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Milon\Barcode\Facades\DNS2DFacade;
use Stringable;
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

    public function edit($id)
    {
        $produk = Product::where('id', $id)->with('category')->get();
        // $item = json_decode($produk);
        $s = Category::where('parent_id', null)->get();
        $kategoriutama = Category::where('id' ,$produk[0]->category_id )->with('children')->get();
        $enum = Product::$status;
        // dd($kategoriutama);
        return view('admin.product.edit',[
            'produk' => $produk,
            's' => $s,
            'kategori' => $kategoriutama,
            'enum' => $enum
        ]);
    }

    public function update(Request $request, $id){
        $data = Product::findOrFail($id);
        // dd($data);
        $image = $request->file('foto');
        if (isset($image))
        {
            $new_name = $image->getClientOriginalExtension();
            $image->move(public_path().'/images/produk', $new_name);
            $data->update(array(
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'kode' => $request->kode,
                'description' => $request->description,
                'dayrate' => $request->dayrate,
                'category_id' => $request->category_id,
                'status' => $request->status,
                'foto' => $new_name,
            ));
        }
        $form_data = array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'kode' => $request->kode,
            'description' => $request->description,
            'dayrate' => $request->dayrate,
            'category_id' => $request->category_id,
            'status' => $request->status,
        );
        $data->update($form_data);
        
        return redirect('admin/product')->with('success','Product updated successfully');
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
