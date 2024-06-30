@extends('layouts.layouts')

@section('content')
<section id="hero"  class="px-0">
    <div class="container text-center text-white">
        <div class="hero-title" data-aos="fade-up">
            <h1 class="hero-text">Selamat Datang <br> Di Website UKM Imam Poliwangi</h1>
            <h4>Unit Kegiatan Mahasiswa Ikatan Mahasiswa Muslim Politeknik Negeri Banyuwangi</h4>
        </div>
    </div>
 </section>

 <section id="program" style="margin-top: -30px">
    <div class="container col-9">
        <div class="row">
            <div class="col-lg-3 col-md-6 col mb-2 " data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 mb-3  d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Berkualitas</p>
                    </div> 
                    <img src="{{asset('assets/icons/ic-book.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Berakhlak</p>
                    </div> 
                    <img src="{{asset('assets/icons/ic-globe.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Muammalah</p>
                    </div> 
                    <img src="{{asset('assets/icons/ic-neraca.png')}}" height="55" width="55" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col mb-2" data-aos="flip-left">
                <div class="bg-white rounded-3 shadow p-3 mb-2 d-flex justify-content-between align-items-center">
                    <div>
                        <p>Pendidikan <br> Tegnologi</p>
                    </div> 
                    <img src="{{asset('assets/icons/ic-komputer.png')}}" height="55" width="55" alt="">
                </div>
            </div>
        </div>
    </div>
 </section>

 {{-- Navbar penutup --}}

 {{-- Berita --}}
 <section id="berita" class="py-5" data-aos="flip-up">
    <div class="container">
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
            <a href="/berita" class="btn btn-outline-danger">Berita Lainnya</a>
        </div>
    </div>
 </section>
 {{-- Berita Penutup --}}

 {{-- Pendaftaran --}}

 <section id="join" class="py-5" data-aos="flip-down">
    <div class="container py-5">
        <div class="row d-flex align-items-center">
            <div class="col-lg-6">
                <div class="d-flex align-center mb-3">
                    <div class="stripe me-2"></div>
                    <h5>Daftar Anggota</h5>
                </div>
                <h1 class="fw-bold mb-2">Gabung Bersama kami, mewujudkan generasi rabbani</h1>
                <p class="mb-3">UKM IMAM Poliwangi adalah Unit Kegiatan Mahasiswa yang berfokus pada aspek spiritual dan keagamaan di Politeknik Negeri Banyuwangi (Poliwangi).
                    UKM ini bertujuan untuk membina dan memperkuat iman serta meningkatkan pemahaman dan praktik keagamaan di kalangan mahasiswa.
                </p>
                <button class="btn btn-outline-danger">Register</button>
            </div>
            <div class="col-lg-6">
                <img src="{{asset('assets/images/il-join.png')}}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
 </section>
 {{-- Pendaftaran Penutup --}}

 {{-- Bagian Vedeo --}}
 <section id="video" class="py-5" data-aos="zoom-in">
    <div class="container py-5">
        <div class="text-center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/SNSCvaQ8RuA?si=MOgptmV9T7jbVS6c" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
 </section>

 <section id="video_youtube" class="py-5" data-aos="zoom-in">
    <div class="container py-5">
        <div class="header-berita text-center">
            <h2 class="fw-bold">Video Terkini UKM Imam</h2>
        </div>

        <div class="row py-5">
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/SNSCvaQ8RuA?si=MOgptmV9T7jbVS6c" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/SNSCvaQ8RuA?si=MOgptmV9T7jbVS6c" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4">
                <iframe width="100%" height="215" src="https://www.youtube.com/embed/SNSCvaQ8RuA?si=MOgptmV9T7jbVS6c" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="footer-berita text-center">
            <a href="" class="btn btn-outline-danger">Video Lainnya</a>
        </div>
    </div>
 </section>
 {{-- Bagian Vedeo Penutup--}}

 {{-- Bagian Foto --}}
 <section id="foto" class="section-foto parallax" data-aos="zoom-in-up">
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
                {{-- <div class="carousel-item">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-6">
                            <a id="image-link" href="{{ asset('image/image9.jpg') }}">
                            <img src="{{ asset('image/image9.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a id="image-link" href="{{ asset('image/image10.jpg') }}">
                            <img src="{{ asset('image/image10.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a id="image-link" href="{{ asset('image/image11.jpg') }}">
                            <img src="{{ asset('image/image11.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <a id="image-link" href="{{ asset('image/image12.jpg') }}">
                            <img src="{{ asset('image/image12.jpg') }}" class="img-fluid" alt="...">
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
 </section>
 {{-- Bagian Foto Penutup --}}

 {{-- About --}}
 <section id="about" data-aos="zoom-in-up">
    <div id="About" class="container-fluid mt-1" >
        <div class="row mt-5">
            <div class="col mt-5">
                <div class="p-3 box1" >
                    <div class="col-12 info-tagline" >
                        <div class="rectangle"></div>
                        <h2 data-aos="zoom-in">About</h2>
                    </div>
                    <div class="col-md-10 mt-5 mx-auto" >
                        <div class="card" data-aos="zoom-in">
                            <div class="card-body">
                                <p> Tujuan dari aplikasi ini nantinya adalah mempermudah mitra,
                                    para mahasiswa yang nantinya akan mendaftar menjadi anggota ukm dan mahasiswa yang ingin
                                    mengetahui informasi tentang ukm dan mungkin akan tertarik untuk bergabung,
                                    dan para anggota ukm yang akan meminjam alat olahraga yang akan digunakan untuk
                                    keperluan latihan.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
 {{-- About Penutup --}}

 {{-- team --}}
<section>
<div id="Team" class="container-fluid" data-aos="zoom-in">
<div class="row">
    <div class="col mt-5">
        <div class="p-3 box1">
            <div class="col-12 info-tagline">
                <div class="rectangle"></div>
                <h2 data-aos="zoom-in">Team</h2>
            </div>

            {{-- Team  --}}
            <div class="row mt-2 justify-content-center" style="position: relative; top:50px;" data-aos="zoom-in">
                <div class="col-md-2">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/lisa.jpg') }}" class="rounded-circle" style="width: 150px; " alt="...">
                        <h5>Lisa Ayu Anjani</h5>
                        <p>Scrum Master</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-center">
                        <img src="{{ asset('image/IMG-20210808-WA0110.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                        <h5>Maulana Nurfaizi Anugerah</h5>
                        <p>Web Development</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-center">
                        <img src="{{ asset('assets/images/rouf.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                        <h5>M. Rouf Mubarok</h5>
                        <p>Databasae Analyst</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-center">
                        <img src="{{ asset('image/1685946468058.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                        <h5>Maulana Muhammad Irsyad</h5>
                        <p>Desain UI/UX</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="text-center">
                        <img src="{{ asset('image/DSC_0093.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
                        <h5>Putra Questy Ramadhan</h5>
                        <p>Mobile Development</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</section>
{{-- Team Penutup --}}

{{-- kontak --}}
<section>
<div id="Contact" class="container-fluid" data-aos="zoom-in">
<div class="row">
    <div class="col mt-5">
        <div class="p-3 box1">
            <div class="col-12 info-tagline">
                <div class="rectangle"></div>
                <h2 data-aos="zoom-in">Contact</h2>
            </div>

            <div class="row" data-aos="zoom-in">

                {{-- <!-- Information/Preview Section -->  --}}
                <div class="col-md-10 mt-5 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <p>Selamat datang di halaman Contact Us! Kami senang mendengar dari Anda. Jika Anda memiliki pertanyaan, saran, atau ingin berbagi pengalaman, jangan ragu untuk menghubungi tim kami. Kami berkomitmen untuk memberikan layanan terbaik dan merespons secepat mungkin.</p>
                            <div class="contact-links">
                                <!-- WhatsApp Logo -->
                                <a class="contact-link" href="https://wa.me/1234567890" target="_blank">
                                    <img src="{{ asset('assets/icons/WhatsApp.png') }}" alt="WhatsApp">
                                    <h5>Call : 081 xxxx xxx</h5>
                                </a>

                                <!-- Instagram Logo -->
                                <a class="contact-link" href="https://www.instagram.com/ukmolahraga_poliwangi/" target="_blank">
                                    <img src="{{ asset('assets/icons/Instagram_logo_2022.svg.png') }}" alt="Instagram" style="height: 30px; width: 30px;">
                                    <h5>imampokiwangi</h5>
                                </a>

                                <!-- Gmail Logo -->
                                <a class="contact-link" href="https://www.yourwebsite.com" target="_blank">
                                    <img src="{{ asset('assets/icons/gmail.png') }}" alt="Gmail" style="height: 40px; width: 50px;">
                                    <h5>ukmimam@gmail.com</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
</section>
{{-- kontak penutup --}}
@endsection




