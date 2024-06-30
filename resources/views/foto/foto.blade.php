@extends('layouts.layouts')

@section('content')
{{-- Bagian Foto --}}
<section id="foto" style="margin-top: 100px" class="section-foto parallax" data-aos="zoom-in-up">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <div class="d-flex align-items-center">
                <div class="stripe-putih me-2"></div>
                <h5 class="fw-bold text-white">Foto Kegiatan</h5>
            </div>
            <div>
                <a href="/fotokegiatan" class="btn btn-outline-light">Foto Lainnya</a>
            </div>
        </div>
    <!-- Carausel Section -->
    <div class="container justify-content-center align-items-center posi-section">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita1.jpg') }}">
                                <img src="{{ asset('assets/images/imamberita1.jpg') }}" class="img-fluid" alt="...">
                            </a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita2.jpg') }}">
                            <img src="{{ asset('assets/images/imamberita2.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita3.png') }}">
                            <img src="{{ asset('assets/images/imamberita3.png') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita4.png') }}">
                            <img src="{{ asset('assets/images/imamberita4.png') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita5.jpg') }}">
                            <img src="{{ asset('assets/images/imamberita5.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita6.jpg') }}">
                            <img src="{{ asset('assets/images/imamberita6.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('assets/images/imamberita7.png') }}">
                            <img src="{{ asset('assets/images/imamberita7.png') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="">
                            <img src="{{ asset('assets/images/imamberita8.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('image/image9.jpg') }}">
                            <img src="{{ asset('image/image9.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('image/image10.jpg') }}">
                            <img src="{{ asset('image/image10.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('image/image11.jpg') }}">
                            <img src="{{ asset('image/image11.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('image/image12.jpg') }}">
                            <img src="{{ asset('image/image12.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 </section>
 {{-- Bagian Foto Penutup --}}

@endsection