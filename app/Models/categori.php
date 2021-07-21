<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categori extends Model
{
    use HasFactory;
    protected $TABLE = "tb_cat";
    protected $primarykey = "cat_id";
    protected $filltable = ['cat_name','text'];
}
