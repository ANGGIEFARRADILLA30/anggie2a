<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <style>
    nav {
      border-radius:20px;
    }

    footer {
      border-radius:20px;
    }

    img {
      border-radius:20px;
    }
    </style>
  <body>
    
    
  

<nav class="navbar navbar-expand-lg   row-sm"  >
  
  <div class="container-fluid col-9">
    <a class="navbar-brand" href="#">Terpopuler</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hiburan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Olahraga</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="text-center  col-2 ">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class=" nav-link font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class=" ">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class=" ms-4  ">Register</a>
                @endif
            @endauth
        </div>
    @endif
  </div>

</nav>

<!-- bagian foto kecil" -->
<div class="container">
  <div class="row">
  @foreach($berita as $b)
<div class="card my-5 ms-2 col-3  ">
    <img src="/img/{{$b->gambar}}" class="card-img">
    <div class="card-body">
      <h5 class="card-title">{{$b->judul}}</h5>
      <p class="card-text"> {{ (str_word_count($b->isi) > 20 ? substr($b->isi,0,50)."[..]" : $b->isi)
      }}</p>
      <a href="#" class="btn btn-primary">Lihat detail</a>
    </div>
  </div>
  @endforeach
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>