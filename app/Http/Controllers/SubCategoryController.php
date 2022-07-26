<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function edit($id){
        $subkategori = Category::where('id', $id)->with('children')->get();
        $sub = Category::where('parent_id', '=', null)->get();
        // dd($subkategori);
        return view('admin.category.editsubcat', [
            'subkategori' => $subkategori,
            'sub' => $sub
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = Category::findOrFail($id);
        // dd($data);
        $image = $request->file('foto');
        if (isset($image))
        {
            $new_name = $image->getClientOriginalExtension();
            $image->move(public_path().'/images/subkategori', $new_name);
            $data->update(array(
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => $request->id,
                'foto' => $new_name,
            ));
        }
        $form_data = array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => $request->id,
        );
        $data->update($form_data);
        
        return redirect('admin/subcategory')->with('success','Sub Kategori Berhasil Diupdate');
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
        return redirect('admin/subcategory')->with('success','Sub Kategori Berhasil Ditambahkan');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id)->where('id', $id);
        $category->delete();
        // dd($category);
        return redirect('admin/subcategory')->with('success', 'Sub Kategori Berhasil Dihapus');
    }
}
