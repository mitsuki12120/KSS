<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Favorite extends Model
{
    protected $fillable = ['id','user_id','product_id','fav_flg'];

    public function user()
    {
        return $this->hasOne(User::class,'foreign_key');
    }
    public function getDatabyId(){
        return Favorite::all();
    }

}