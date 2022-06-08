<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Favorite;
use App\Models\Product;
use App\Models\User;


class KSSController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $delete_flg1 = 0;
        // $delete_flg2 = 0;
        // $delete_flg3 = 0;
        // $delete_flg4 = 0;
        // $delete_flg5 = 0;
        // $delete_flg6 = 0;
        // $delete_flg7 = 0;
        // $delete_flg8 = 0;
        $val1=$request->val1;
        $val2=$request->val2;
        $val3=$request->val3;
        $val4=$request->val4;
        $val5=$request->val5;
        $val6=$request->val6;
        $val7=$request->val7;
        $val8=$request->val8;
        $products = Product::select('products.id as p_id','products.name','products.price','products_images.file','products_images.path')
        ->join('products_images','products.id','=','products_images.product_id')
        ->get();
                
        

        return view('index.cart',[
            'products' => $products,
            'val1' => $request->val1,
            'val2' => $request->val2,
            'val3' => $request->val3,
            'val4' => $request->val4,
            'val5' => $request->val5,
            'val6' => $request->val6,
            'val7' => $request->val7,
            'val8' => $request->val8,
            // 'delete_flg1' => $delete_flg1,
            // 'delete_flg2' => $delete_flg2,
            // 'delete_flg3' => $delete_flg3,
            // 'delete_flg4' => $delete_flg4,
            // 'delete_flg5' => $delete_flg5,
            // 'delete_flg6' => $delete_flg6,
            // 'delete_flg7' => $delete_flg7,
            // 'delete_flg8' => $delete_flg8,
        ]);
    }



    public function guest_index() {
        return view('guest.guest_index');
    }




    public function productList() {
        $user = auth()->id();

        $products = Product::select('products.id as p_id','products.name','products.price','products_images.file','products_images.path','favorites.fav_flg')
                    ->join('products_images','products.id','=','products_images.product_id')
                    ->leftjoin('favorites','products.id','=','favorites.product_id')
                    ->get();

// dd($products);
        return view('dashboard', ['products' => $products,'user' => $user]);
    }

    public function searchList(Request $request){
        $search = $request->input('search');
        $query = Product::query();
        $query->join('products_images', function ($query) use ($request) {
            $query->on('products.id', '=', 'products_images.product_id');
            });

            if(!empty($search)) {
                $query->where('name', 'LIKE', "%{$search}%");
            }

            $products = $query->get();
            // dd($products);
            return view('dashboard',['products' => $products,'search' => $search]);
}


    public function payment() {
        return view('index.payment');
    }


}
