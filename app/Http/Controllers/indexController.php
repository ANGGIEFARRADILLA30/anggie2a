<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Berita;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
       
        $berita = Berita::all();
        return view('index', ['berita' => $berita]);
    
    }
}
