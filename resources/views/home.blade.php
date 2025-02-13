@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>



<div class="px-5 d-flex justify-content-center gap-5">

    <div class="mt-5">
        <div class="card" style="width: 18rem;">
           
            <div class="card-body">
              <h5 class="card-title">kelola Data</h5>
              <p class="card-text">Kelola data disini</p>
              <a href="/showdata" class="btn btn-primary">Tambah Data</a>
            </div>
          </div>
    </div>
<div class="px-5 d-flex justify-content-center gap-5">

    <div class="mt-5">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Tambah data</h5>
              <p class="card-text">Masukan berita</p>
              <a href="/tambah" class="btn btn-primary">Tambah Data</a>
            </div>
          </div>
    </div>
</div> 
</div>

@endsection
