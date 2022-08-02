<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Customer;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use stdClass;

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
        $start = Carbon::parse($request->start_date)->format('Y-m-d');
        $end = Carbon::parse($request->end_date)->format('Y-m-d');
        $id_product = $request->product_id;

    //    $data = User::with('customer')->get();
        // $data = Order::whereBetween('from_date', [$start,$end])->get();
        $test = Invoice::with('product')->where('product_id', $id_product)->whereBetween('fromdate', [$start,$end])->get();
        // $test = Invoice::with('product')->where('product_id', $id_product)->whereDate('fromdate','>',$start)->whereDate('fromdate','<=',$end)->get();
        // dd($start);
        // $cek = Order::where('product_id', $id)->get();
        $json = json_decode($test);
        $empty = new stdClass;
        $kosong = 'Tersedia';
        $terisi = 'Tidak Tersedia';
        if($json != null)
        {
            return $terisi;
        }
        else{
            return $kosong;
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
