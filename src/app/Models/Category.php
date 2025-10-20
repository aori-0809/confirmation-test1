<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories'; // テーブル名を指定
    protected $fillable = ['category']; // マスアサインメント可能なカラム

     public $timestamps = true;
}
