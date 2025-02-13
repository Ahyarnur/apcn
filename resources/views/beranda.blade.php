@extends('layouts.ya')

@section('content')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
      <div class="d-flex align-items-center">
          <img src="logo.png" height="50px" alt="">
          <div class="mt-3" style="margin-left: 10px">
              <p class="fs-4" style="margin-bottom: 30px">Desa Ajibarang</p>
              <p style="margin-top: -37px">Kec.Ajibarang Kab.Banyumas</p>
          </div>
      </div>
    <div class="collapse navbar-collapse" style="margin-left: 400px" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown link
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="position-relative" style="background-image: url('/ya.png'); background-size: cover; background-position: center; height: 100vh;">
        <div class="position relative d-flex flex-column justify-content-center align-items-center h-100">
            <h1 class="display">jwjwjwjwj</h1>
        </div>
    </div>

    <div style="margin-top: 200px">

        <div class="container text-center">
            <div class="row">
              <div class="col">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, iusto? Reiciendis beatae atque possimus veritatis unde distinctio animi magnam accusantium fugit, ipsa necessitatibus, culpa, voluptates nobis deleniti nisi tempora soluta corrupti recusandae. Temporibus neque quaerat distinctio sint, harum unde obcaecati, alias impedit dolor, recusandae veritatis amet maxime sit et adipisci.
              </div>
              
              <div class="col">
                <img src="lurah.png" class="bg-primary rounded-circle" style="height: 200; width: 190px;" alt="">
              </div>
            </div>
          </div>
    </div>


    <div class="px-5 d-flex justify-content-center gap-5">


      @foreach ($data as $cek)
          
        <div class="mt-5">
            <div class="card" style="width: 18rem;">
                <img src="{{ url('/storage/' . $cek->foto) }}" style="height: 200px; width: 285px;" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$cek->judul}}</h5>
                  <p class="card-text">{{$cek->deskripsi}}</p>
                  <p>oleh {{Auth::user()->name}} | {{ $cek->created_at->translatedFormat('d F Y') }}</p></p>
                
                  <a href="detail/{{$cek->id}}" class="btn btn-primary">Selengkapnya</a>
                </div>
              </div>
        </div>
        @endforeach

        
      </div>
      <div  class="d-flex justify-content-center mt-4">
        {{ $data->links('pagination::bootstrap-5') }}
      </div>

    
@endsection
