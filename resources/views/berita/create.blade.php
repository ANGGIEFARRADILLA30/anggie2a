@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default card">
                <div class="panel-head container-fluid text-center" style="margin-top: 10px;">
                    <h1>Tambah Data berita</h1>
                </div>
                <div class="panel-body ms-5 me-5">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors-> all() as $error)
                            <li>{{$error}}</li>
                                                                                      
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                    <form class="form-horizontal" action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">{{ csrf_field() }}
                        <div class="form-group">
                            <label for="penulis" class="control-label col-sm-2 mt-3">Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" value="{{old('penulis')}}">
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                   Masukan penulis.
                                  </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="id_kategori" class="control-label col-sm-3 mt-3">Kategori Berita</label>
                            <div class="col-sm-10">
                                <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori" >
                                    <option value="">Pilih Kateogri</option>
                                        @foreach ($kategori as $k)
                                    <option value="{{$k->id}}">{{ $k->nama }} </option>
                                        @endforeach
                                </select>
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                   Pilih kategori.
                                  </div>
                            </div>
                        </div>
                    <div class="form-group">
                        <label for="judul" class="control-label col-sm-3 mt-3">Judul Berita</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{old('judul')}}">
                            <div class="valid-feedback">
                                Looks good!
                              </div>
                              <div class="invalid-feedback">
                               Masukan judul.
                              </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="isi" class="form-label mt-2 mb-0">Isi Berita</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" id="isi" rows="3" name="isi" value="{{old('isi')}}"></textarea>
                        <div class="valid-feedback">
                            Looks good!
                          </div>
                          <div class="invalid-feedback">
                           Masukan Isi Berita
                          </div>  
                 
                          <div class="form-group">
                            <div class="mb-3">
                                <label for="gambar" class="form-label">Upload Gambar</label>
                                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="formFile"  name="gambar" accept="image/*" value="{{old('gambar')}}">
                                <div class="valid-feedback">
                                    Looks good!
                                  </div>
                                  <div class="invalid-feedback">
                                  masukan Gambar.
                                  </div>
                             </div>
                        </div>
              
                
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 mt-5 mb-5">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
</form>
</div>
</div>
</div>
</div>
</div>
@endsection