@extends('layouts.app') @section('content') 
<div class="container"> 
    <div class="row"> 
     <div class="col-md-12"> 
      	<div class="panel panel-default card"> 
      	 	<div class="panel-head container-fluid text-center" style="margin-top: 10px;"> 
      	 	 	<h1>Data Detail berita</h1> 
      	 	</div> 
      	 	<div class="form-horizontal ms-5"> 
 	 	      	<div class="panel-body"> 
 	 	      	 	{{ csrf_field() }} 
 	 	      	 	<input type="hidden" name="_method" value="PUT"> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="col-sm-2 fw-bold">Penulis berita</label> 
 	 	      	 	 	<div class="col-sm-10"> 
 	 	      	 	 	 	<p>{{ $berita->penulis }}</p> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="col-sm-2 fw-bold">Kategori berita</label> 
 	 	      	 	 	<div class="col-sm-10"> 
 	 	      	 	 	 	{{ $berita->kategori->nama }} 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="col-sm-2 mt-3 fw-bold">Judul </label> 
 	 	      	 	 	<div class="col-sm-10"> 
 	 	      	 	 	 	<p>{{ $berita->judul }}</p> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="col-sm-2 fw-bold">Gambar</label> 
 	 	      	 	 	<div class="col-sm-10"> 
 	 	      	 	 	 	<img src="/img/{{$berita->gambar}}" width="200">
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<label class="col-sm-2 fw-bold mt-3">Isi</label> 
 	 	      	 	 	<div class="col-sm-10"> 
 	 	      	 	 	 	<p>{{ $berita->isi }}</p> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	 	<div class="form-group"> 
 	 	      	 	 	<div class="col-sm-offset-2 col-sm-10 mb-3"> 
 	 	      	 	 	 	<a href="{{ route('berita.index') }}" class="btn btn-warning">Kembali</a> 
 	 	      	 	 	</div> 
 	 	      	 	</div> 
 	 	      	</div> 
      	 	</div> 
      	</div> 
     </div> 
    </div> 
</div> 
@endsection 
