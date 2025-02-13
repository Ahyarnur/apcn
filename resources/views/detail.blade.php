@extends('layouts.ya')

@section('content')
<section class="container mt-5 p-4 bg-white rounded shadow-lg">
    
    <!-- Article Title -->
    <h1 class="h3 fw-bold text-dark mb-3">{{$detail->judul}}</h1>
    
    <!-- Metadata (Date, Author) -->
    <div class="d-flex flex-wrap align-items-center text-muted mb-3">
        <div class="d-flex align-items-center me-3">
            <i class="bi bi-calendar-event me-1"></i>
            <span>Diposting {{ $detail->created_at->translatedFormat('d F Y') }}</span>
        </div>
        <span class="mx-2">|</span>
        <div>
            <span>Oleh: {{Auth::user()->name}}</span>
        </div>
    </div>

    <!-- Article Image -->
    <div class="mb-3">
        <img src="{{ url('/storage/' . $detail->foto) }}" 
             class="img-fluid rounded w-100" 
             style="height: 400px; object-fit: cover;">
    </div>

    <!-- Article Content -->
    <div class="text-secondary lh-lg">
        <p class="mb-4">{{$detail->deskripsi}}</p>
    </div>

    <!-- Back to Articles -->
    <div class="mt-4 text-center text-md-start">
        <a href="/beranda" class="text-decoration-none text-primary fw-medium">&larr; Kembali beranda</a>
    </div>
</section>

@endsection