<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Controllers\KSSController;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = auth()->id();
        $info = User::select('users.id','users.name','users.kana','users.address_num','users.prefectures','users.address1','users.address2','users.email',)
        ->where('users.id','=',$users)
        ->get();
        // dd($info);
        return view('index.myPage',['info' => $info,'user' => $users]);
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
    public function edit()
    {
        $users = auth()->id();
        $info = User::select('users.id','users.name','users.kana','users.address_num','users.prefectures','users.address1','users.address2','users.email',)
        ->where('users.id','=',$users)
        ->get();
        // dd($info);
        return view('index.edit',['info' => $info,'user' => $users]);
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
        // dd($request);
        $id = $request->id;
        $user = User::find($id);
        $user->name = $request->name;
        $user->kana = $request->kana;
        $user->email = $request->email;
        $user->address_num = $request->address_num;
        $user->prefectures = $request->prefectures;
        $user->address1 = $request->address1;
        $user->address2 = $request->address2;
        $user->timestamps = false;
        $user->save();

        $users = auth()->id();
        $info = User::select('users.id','users.name','users.kana','users.address_num','users.prefectures','users.address1','users.address2','users.email',)
        ->where('users.id','=',$users)
        ->get();
        return view('index.myPage',['info' => $info,'user' => $users]);
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


    public function admin() {

        $users = DB::select('select * from users');
        $data = ['users' => $users];
        return view('admin', $data);
    }
}
