<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('assets/icons/ic-logo.ico') }}">

    <title>UKM IMAM</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- aos --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- magnific --}}
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    {{-- css home --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>
<body>

    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Conten --}}
    @yield('content')

    <!-- Footer -->
    <section id="footer">
        @include('layouts.footer')
    </section>
    {{-- footer Penutup --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Custom JS -->
    <script src="{{ asset('assets/js/magnific.js') }}"></script>

    <script>
        const navbar = document.querySelector(".fixed-top");
        window.onscroll = () => {
            if (window.scrollY > 0) {
                navbar.classList.add("scroll-nav-active");
                navbar.classList.add("text-nav-active");
                // navbar.classList.remove("navbar-dark");
            } else {
                navbar.classList.remove("scroll-nav-active");
                // navbar.classList.add("navbar-dark");
            }
        };

        // animasi aos
        AOS.init();

        // Magnific
        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',
                closeOnContentClick: true,
                mainClass: 'mfp-img-mobile',
                image: {
                    verticalFit: true
                }
            });
        });
    </script>
</body>

</html>
