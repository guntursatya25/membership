<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>GunturSatya - Solusi Era Digital</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <link rel="apple-touch-icon" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    {{-- <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png"> --}}
    {{-- <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png"> --}}
    <link rel="icon" type="image/png" href="{{ asset('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <meta content="Software Engineer, Guntur Satya" name="keywords" />
    <meta name="description"
        content="GunturSatya: Solusi Digital Terdepan di Era Digital untuk Meningkatkan Produktivitas dan Inovasi Bisnis Anda">
    <link href="https://fonts.googleapis.com/" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" />

    <link href="https://fonts.googleapis.com/" rel="dns-prefetch" />
    <link href="https://fonts.gstatic.com" rel="dns-prefetch" />
    <link rel="canonical" href="https://guntursatya.com/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://guntursatya.com/" />
    <meta property="og:title" content="GunturSatya.com" />
    <meta property="og:description"
        content="GunturSatya: Solusi Digital Terdepan di Era Digital untuk Meningkatkan Produktivitas dan Inovasi Bisnis Anda" />
    <meta property="og:image" content="{{ asset('assets/member/img/Guntursatya400.png') }}" />
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://guntursatya.com/" />
    <meta property="twitter:title" content="GunturSatya.com" />
    <meta property="twitter:description"
        content="GunturSatya: Solusi Digital Terdepan di Era Digital untuk Meningkatkan Produktivitas dan Inovasi Bisnis Anda" />
    <meta property="twitter:image" content="{{ asset('assets/member/img/Guntursatya400.png') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/stylehome.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg" id="#navbarku">
            <div class="container">
                <a class="navbar-brand guntur" href="#" title="GunturSatya"><img
                        src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEisVsrkp2msXhVPWbAz6rwNhGTw65EkNaCOQ2B0Ug0MuR4dL7fecPyiPXqr2lnwDAdtn0U_0dz41NGEMktkX60UXWBub3aS1GDya-OA1ZqXtNxtXrKo58n2lxW8mf4fk9NwHc6Uh0q2DIKpmec2hos7m-jWPpwAjWD2aTERbYWZgiWPdWqBAm4oxYkmbKzG/s320/Guntursatya1.png" /></a>

                <button aria-controls="offcanvasNavbar" class="navbar-toggler" data-bs-target="#offcanvasNavbar"
                    data-bs-toggle="offcanvas" type="button">
                    <span class="navbar-toggler-icon" />
                </button>

                <div aria-labelledby="offcanvasNavbarLabel" class="offcanvas offcanvas-end" id="offcanvasNavbar"
                    tabindex="-1">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button aria-label="Close" class="btn-close" data-bs-dismiss="offcanvas" type="button" />
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-nav ms-auto menuku">
                            <a aria-current="page" class="nav-link active me-5" href="#">Home</a>
                            <a class="nav-link me-5" href="#">Blog</a>
                            <a class="nav-link me-5" href="/portofolio">Project</a>
                            <a class="nav-link me-5" href="#">Store</a>
                            <a class="nav-link loginin" href="{{ route('login') }}">Login</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div id="wrapcontent">
        <main>
            <section class="aboutme container">
                <div class="pt-5 rounded-3">
                    <div class="aku container-fluid">
                        <span class="mb-3">Hi, it&#39;s me</span>
                        <h1 class="mb-3">Guntur Satya</h1>
                        <p>Creative Designer and Software Developer</p>
                        <button class="contact mt-4">
                            <a
                                href="https://api.whatsapp.com/send?phone=6287779909065&amp;text=Halo%2C%20saya%20menghubungi%20melalui%20guntursatya.com.%20Saya%20ingin%20bekerja%20sama%20dengan%20Anda.               ">Contact</a>
                        </button>
                    </div>
                </div>
            </section>

            <svg class="pht1" viewBox="0 0 1440 250" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M0,32L80,53.3C160,75,320,117,480,117.3C640,117,800,75,960,69.3C1120,64,1280,96,1360,112L1440,128L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"
                    fill="#38B6FF" fill-opacity="1" />
            </svg>
            <section class="akubisa">
                <div class="container">
                    <div class="mb-5 lineg">
                        <h2>Saya bisa</h2>
                        <div class="line"></div>
                        {{-- <p>I </p> --}}
                    </div>

                    <div class="kedua">
                        <div class="row g-4">
                            <div class="col-12 col-lg-4">
                                <div class="p-5 apani">
                                    <div class="mb-5">
                                        <svg class="bi bi-laptop" fill="currentColor" height="50"
                                            viewBox="0 0 16 16" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z" />
                                        </svg>
                                    </div>
                                    <h4>UI/UX Design</h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="p-5 apani">
                                    <div class="mb-5">
                                        <svg class="bi bi-phone" fill="currentColor" height="50"
                                            viewBox="0 0 16 16" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z" />
                                            <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                                        </svg>
                                    </div>
                                    <h4>Mobile Development</h4>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="p-5 apani">
                                    <div class="mb-5">
                                        <svg class="bi bi-database" fill="currentColor" height="50"
                                            viewBox="0 0 16 16" width="50" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M4.318 2.687C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4c0-.374.356-.875 1.318-1.313ZM13 5.698V7c0 .374-.356.875-1.318 1.313C10.766 8.729 9.464 9 8 9s-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 5.698ZM14 4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16s3.022-.289 4.096-.777C13.125 14.755 14 14.007 14 13V4Zm-1 4.698V10c0 .374-.356.875-1.318 1.313C10.766 11.729 9.464 12 8 12s-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10s3.022-.289 4.096-.777A4.92 4.92 0 0 0 13 8.698Zm0 3V13c0 .374-.356.875-1.318 1.313C10.766 14.729 9.464 15 8 15s-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13s3.022-.289 4.096-.777c.324-.147.633-.323.904-.525Z" />
                                        </svg>
                                    </div>
                                    <h4>Web Development</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <footer class="footerku">
        <div class="container p-1 mt-2 justify-content-center text-center">
            <div class="row">
                <div class="col">
                    <h4>Follow Me</h4>
                    <div class="sosmedku my-5">
                        <a class="me-4" href="#" title="Twitter">
                            <svg class="bi bi-twitter" fill="currentColor" height="50" viewBox="0 0 16 16"
                                width="50" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                            </svg></a>
                        <a class="me-4" href="#" title="Facebook">
                            <svg class="bi bi-facebook" fill="currentColor" height="50" viewBox="0 0 16 16"
                                width="50" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                            </svg></a>
                        <a href="#" title="Linkedin"><svg class="bi bi-linkedin" fill="currentColor"
                                height="50" viewBox="0 0 16 16" width="50"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg></a>
                        <a href="#" />
                    </div>
                    <p class="mt-5">
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        All rights reserved | <i aria-hidden="true" class="fa fa-heart-o" /> <a
                            href="https://guntursatya.com" target="_blank">GunturSatya</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
