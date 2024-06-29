<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" href="{{ asset('assets\icons\ic-logo.ico')}}">

        <title>UKM IMAM</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('assets\css\style.css') }}">
        </head>
    <body>

         {{-- Navbar --}}
         <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">
                <img src="{{asset('assets\icons\ic-logo.png')}}" height="55" width="55" alt="">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Profil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="#">Berita</a>
                  </li><li class="nav-item">
                    <a class="nav-link active" href="#">Prestasi</a>
                  </li><li class="nav-item">
                    <a class="nav-link active" href="#">Gallery</a>
                  </li><li class="nav-item">
                    <a class="nav-link active" href="#">Kontak</a>
                  </li>

                </ul>
                <div class="d-flex">
                  <button class="btn btn-danger">Login</button>
                </div>
              </div>
            </div>
          </nav>
         {{-- Navbar --}}

         <section id="hero"  class="px-0">
            <div class="container text-center text-white">
                <div class="hero-title" data-aos="zoom-in">
                    <h1 class="hero-text">Selamat Datang <br>Di Website UKM Imam Poliwangi</h1>
                </div>
            </div>
         </section>

         <section id="program" style="margin-top: -30px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan <br> Berkualitas</h5>
                            </div> 
                            <img src="{{asset('assets/icons/ic-book.png')}}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan <br> Berakhlak</h5>
                            </div> 
                            <img src="{{asset('assets/icons/ic-globe.png')}}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan <br> Muammalah</h5>
                            </div> 
                            <img src="{{asset('assets/icons/ic-neraca.png')}}" height="55" width="55" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                            <div>
                                <h5>Pendidikan <br> Tegnologi</h5>
                            </div> 
                            <img src="{{asset('assets/icons/ic-komputer.png')}}" height="55" width="55" alt="">
                        </div>
                    </div>
                </div>
            </div>
         </section>

         {{-- Navbar penutup --}}

         {{-- Berita --}}
         <section id="berita" class="py-5">
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

         {{-- Pendaftaran --}}

         <section id="join" class="py-5">
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
         <section id="video" class="py-5">
            <div class="container py-5">
                <div class="text-center">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SNSCvaQ8RuA?si=MOgptmV9T7jbVS6c" 
                    title="YouTube video player" frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
         </section>

         <section id="video_youtube" class="py-5">
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
         <section id="foto" class="section-foto parallax">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-5">
                    <div class="d-flex align-items-center">
                        <div class="stripe-putih me-2"></div>
                        <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                    </div>
                    <div>
                        <a href="#" class="btn btn-outline-light">Foto Lainnya</a>
                    </div>
                </div>
            <!-- Carausel Section -->
            <div class="container justify-content-center align-items-center posi-section">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a class="image-link" href="#">
                                        <img src="{{ asset('assets/images/imamberita1.jpg') }}" class="img-fluid" alt="...">
                                    </a>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita2.jpg') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita3.png') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita4.png') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita5.jpg') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita6.jpg') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
                                    <img src="{{ asset('assets/images/imamberita7.png') }}" class="img-fluid" alt="...">
                                    </a>
                                </div>
                                <div class="col-lg-3 col-md-6 col-6">
                                    <a id="image-link" href="#">
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
         <section id="about">
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
                                <img src="{{ asset('image/IMG_20231220_082333.jpg') }}" class="rounded-circle" style="width: 150px; " alt="...">
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
                                <img src="{{ asset('image/IMG-20231007-WA0025.jpg') }}" class="rounded-circle" style="width: 150px;" alt="...">
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

    <!-- Footer -->
    <section id="footer">
        @include('home.footer')
    </section>
    {{-- footer Penutup --}}

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>

        <script>
            const navbar = document.querySelector(".fixed-top");
            window.onscroll = () => {
                if (window.scrollY> 100) {
                    navbar.classList.add("scroll-nav-active");
                    navbar.classList.add("text-nav-active");
                    navbar.classList.remove("navbar-dark");
                } else {
                    navbar.classList.remove("scroll-nav-active");
                    navbar.classList.add("navbar-dark");
                }
            };
        </script>
    </body>

</html>
