<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{  
    public function index() {
        $kategori = Category::with('parent')->get();
        $subkategori = Category::whereHas('children')->get();
        // dd($subkategori);
        $sub = Category::where('parent_id', '=', null)->get();
        return view('admin.category.subcategory',[
            'subkategori' => $subkategori,
            'sub' => $sub
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

                $category = new Category();
                $category->name = $request->name;
                $category->parent_id = $request->id;
                $category->slug = \Str::slug($request->name);
                $category->foto = $namafile;
                $nm->move(public_path().'/images/subkategori', $namafile);
                $category->save();
            }
        else
        {
            $category = new Category();
            $category->name = $request->name;
            $category->parent_id = $request->id;
            $category->slug = \Str::slug($request->name);
            $category->foto = 'foto.png';
            $category->save();
        }
        return redirect('admin/subcategory')->with('success','Data added successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        
        return redirect('admin/subcategory')->with('success', 'Data Deleted Successfully');
    }
}
