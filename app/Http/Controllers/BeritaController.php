<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Berita;


class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('berita.index', ['berita' => $berita]);
    }
    public function create()
    {
        $kategori = Kategori::all();
        return view('berita.create', ['kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $requestData = $request->all();
        $kategori = Kategori::all();
         
         $extFile = $request->file('gambar');
         $fileName= date('Y-m-d').$extFile->getClientOriginalName();
         $path = $request->gambar->move('img',$fileName);
      
         $requestData["gambar"]=$fileName;
              
        Berita::create($requestData);
            return redirect()->route('berita.index');
     }
     public function edit($id) 

     {
         $kategori = Kategori::all(); 
         $berita = Berita::where('id',$id)->first();         
         return view('berita.edit',[
             "berita"=>$berita,
             "kategori"=> $kategori
         ]); 
     }
     public function update(Request $request, Berita $berita) 
     { 
         
    
            $requestData = $request->all();
            $requestData = request()->except(['_method', '_token']);
                     
            $kategori = Kategori::all();
             if($gambar= $request->file('gambar')){
             $extFile = $request->file('gambar');
             $fileName= date('Y-m-d').$extFile->getClientOriginalName();
             $path = $request->gambar->move('img',$fileName);
             $requestData["gambar"]=$fileName;
             }else {
                 unset($requestData['gambar']);
             }
           
         $berita->update($requestData);
     
         return redirect()->route('berita.index'); 
     } 
     public function show($id) 
    { 
        $berita = Berita::where('id',$id)->first();       
        
    return view('berita.show',['berita' => $berita]);
} 

     public function destroy($id) 
     { 
         Berita::where('id',$id)->delete();        
          return redirect()->route('berita.index');   
           } 
 
    }
