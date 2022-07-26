<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index() {
        $kategori = Category::where('parent_id', null)->get();
        return view('admin.category.index',[
            'kategori' => $kategori,
        ]);
    }

    public function edit($id){
        $subkategori = Category::where('id', $id)->get();
        // dd($subkategori);
        return view('admin.category.editcat', [
            'subkategori' => $subkategori,
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
            $image->move(public_path().'/images/kategori', $new_name);
            $data->update(array(
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'parent_id' => null,
                'foto' => $new_name,
            ));
        }
        $form_data = array(
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'parent_id' => null,
        );
        $data->update($form_data);
        
        return redirect('admin/category')->with('success','Kategori Berhasil Diupdate');
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
                $category->parent_id = null;
                $category->slug = \Str::slug($request->name);
                $category->foto = $namafile;
                $nm->move(public_path().'/images/kategori', $namafile);
                $category->save();
            }
        else
        {
            $category = new Category();
            $category->name = $request->name;
            $category->parent_id = null;
            $category->slug = \Str::slug($request->name);
            $category->foto = 'foto.png';
            $category->save();
        }

        return redirect('admin/category')->with('success','Kategori Berhasil Ditambahkan');
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
        $category->parent('id', $id)->delete();
        $category->delete();
        
        return redirect('admin/category')->with('success', 'Kategori Berhasil Dihapus');
    }
}
