<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->id();
        
        $products = Product::select('products.id as p_id','products.name','products.price','products_images.file','products_images.path','favorites.fav_flg')
                    ->join('products_images','products.id','=','products_images.product_id')
                    ->leftjoin('favorites','products.id','=','favorites.product_id')
                    ->where('favorites.fav_flg','=','1')
                    ->get();
        return view('index.favorite', ['products' => $products]);
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
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {
        $favorite = new Favorite;
        $id=auth()->id();
        $favorite->user_id = auth()->id();
        $favorite->product_id = $request->product_id;
        
        $favorite->fav_flg = ($request->fav==0?1:0);
        $favorite->timestamps = false;
        $data = $favorite->updateOrCreate(['product_id' => $request->product_id,'user_id' => $id], ['fav_flg' => $favorite->fav_flg]);
        
        $list = ['fav'=>$favorite->fav_flg];
        echo json_encode($list);
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
