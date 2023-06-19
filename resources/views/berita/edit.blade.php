@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-head container-fluid" style="margin-top: 10px;">
                        <h1 class="mb-3 text-center">Edit Data berita</h1>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" action="{{ route('berita.update', $berita->id) }}" method="post">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="row">
                                <div class="form-group mb-3">
                                        
                                    <label for="penulis" class="form-label">Penulis</label>
                                    <input type="text" class="form-control @error('penulis') is-invalid @enderror"d="exampleInputEmail1"
                                        value="{{ $berita->penulis }}" name="penulis" aria-describedby="emailHelp">
                                        <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                           Masukan judul.
                                          </div>
                                </div>
                                  
                        
                                <div class="form-group mb-3 ">
                                    <label for="id_kategori" class="control-label col-sm-3 ">Kategori berita</label>
                                    <div>
                                        <select class="form-control @error('id_kategori') is-invalid @enderror" name="id_kategori">
                                            <option selected value="{{ $berita->id_kategori }}">
                                                {{ $berita->kategori->nama }} </option>
                                            @foreach ($kategori as $k)
                                                @if ($k->id != $berita->id_kategori)
                                                    <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                                @endif
                                            @endforeach
                                            <div class="valid-feedback">
                                                Looks good!
                                              </div>
                                              <div class="invalid-feedback">
                                               Pilih Kategori.
                                              </div>                       </select>
                                        
                                    </div>
                                </div>
                              
                              
                                <div class="form-group mb-3">
                                    <label class="control-label">Judul</label>
                                    <div>
                                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" name="qty"
                                         name="judul" value="{{ $berita->judul }}">
                                    </div>
                                    <div class="valid-feedback">
                                        Looks good!
                                      </div>
                                      <div class="invalid-feedback">
                                       Masukan Judul.
                                      </div>
                                </div>
                                
                               
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="isi" class="form-label">Isi Berita</label>
                                        <textarea class="form-control @error('isi') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="isi">{{ $berita->isi }}</textarea>
                                        <div class="valid-feedback">
                                            Looks good!
                                          </div>
                                          <div class="invalid-feedback">
                                           Masukan Isi Berita.
                                          </div>
                                    </div>
                                </div>
                             
                                <div class="form-group">
                                    <div class="mb-3">
                                    <label for="gambar" class="form-label">Upload Gambar</label>
                                    <input class="form-control" type="file" id="formFile"  name="gambar" class="form-control" type="file" id="formFile"  name="gambar" >   
                                </div>
                                </div>
                               
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary mt-3">Update Data</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection