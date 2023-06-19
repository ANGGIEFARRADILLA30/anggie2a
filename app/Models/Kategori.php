<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    public $table ="kategori";
    protected $guarded = ['id','created_at','upadated_at'];
}
