@extends('layouts.layouts')

@section('content')
{{-- Berita --}}
<section id="berita" style="margin-top: 50px" class="py-5">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Berita Terkini UKM Imam</h2>
        </div>

        <div class="row py-5">
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">29/06/2024</p>
                        <h4 class="fw-bold mb-3">Poliwangi Bersholawat</h4>
                        <p class="text-secondary">#ukmimam</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">29/06/2024</p>
                        <h4 class="fw-bold mb-3">Poliwangi Bersholawat</h4>
                        <p class="text-secondary">#ukmimam</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0">
                    <img src="{{asset('assets/images/il-berita-01.png')}}" class="img-fluid mb-3" alt="">
                    <div class="konten-berita">
                        <p class="mb-3 text-secondary">29/06/2024</p>
                        <h4 class="fw-bold mb-3">Poliwangi Bersholawat</h4>
                        <p class="text-secondary">#ukmimam</p>
                        <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
 </section>
 {{-- Berita Penutup --}}
@endsection