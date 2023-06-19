@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-head container-fluid" style="margin-top: 10px;">
                    <a href="{{ url('berita/create') }}" class="btn btn-primary">Tambah berita</a>
                    
                </div>
                <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>penulis</th>
                                <th>Kategori</th>
                                <th>Judul</th>
                                <th>Isi Berita</th>
                                <th>Gambar</th>
                                <th>Dibuat Pada</th>
                                <th>Diedit Pada</th>
                                <th colspan="3" style="text-align:center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($berita as $i => $b)
                            <tr>
                                <td>{{ $i+1 }}</td>
                                <td>{{ $b->penulis }}</td>
                                <td>{{ $b->kategori->nama}}</td>
                                <td>{{ $b->judul }}</td>
                                <td >{{ (str_word_count($b->isi) > 20 ? substr($b->isi,0,50)."[..]" : $b->isi)
                                }}</td>
                                <td> <img src="/img/{{$b->gambar}}" width="100"> </td>
                                <td>{{ $b->created_at }}</td>
                                <td>{{ $b->updated_at }}</td>
                                <td><a href="{{ route('berita.show',$b->id) }}" class="btn btn-success"> Detail</a></td>
                                <td><a href="{{ route('berita.edit',$b->id) }}" class="btn btn-warning"> Edit</a></td>
                                <td><form method="post" action="{{ route('berita.destroy',$b->id) }}">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection