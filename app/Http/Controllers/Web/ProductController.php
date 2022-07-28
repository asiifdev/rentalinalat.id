<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = Category::where('parent_id' , null)->count();
        // for($i = 0;$i<=($data);$i++)
        // {
        //     $id = $i++;
        // }
        // dd($id++);
        $produk = Product::where('status', 'active')->get();
        $kategori = Category::where('parent_id', null)->with('parent')->get();
        return view('web.product.index',[
            'produk' => $produk,
            'kategori' => $kategori,
            'count' => $data,
        ]);
    }

    public function filter(Request $request)
    {
           $start = Carbon::parse($request->start_date);
           $end = Carbon::parse($request->end_date);

           if($request->ajax()){
                if($request->from_date != '' && $request->to_date != '' ){
                    $data = Order::whereBetween('pickUpDate', array($start,$end))->get();
                }
                else
                {
                    $data = 'Tidak Ditemukan';
                }
                return json_encode($data);
           }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $produk = Product::where('slug', $slug)->get();
        $related = Product::where('category_id', $produk[0]->category_id)->where('id', '!=', $produk[0]->id)->latest()->limit(4)->get();
        // dd($related);
        return view('web.product.show',
        [
            'produk' => $produk,
            'related' => $related
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
