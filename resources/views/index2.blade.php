<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>GunturSatya</title>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />

    <link rel="apple-touch-icon" href="{{ asset('favicon/apple-icon-114x114.png') }}">
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
<meta name="google-adsense-account" content="ca-pub-6678748700591234">
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
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Person",
            "name": "Guntur Satya",
            "url": "https://guntursatya.com",
            "sameAs": [
              "https://www.linkedin.com/in/guntursatya/"
            ],
            "jobTitle": "Software Engineer"
          }
    </script>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "url": "https://guntursatya.com/",
          "potentialAction": {
            "@type": "SearchAction",
            "target": "https://guntursatya.com/blog/?s={search_term_string}",
            "query-input": "required name=search_term_string"
          }
        }
        </script>
</head>

<body>
    <header class="headernya">
        <a href="/">
            <h1 class="logoText">GunturSatya</h1>
        </a>
        <nav>
            <a href="#about">About <span></span></a>
            <a href="https://guntursatya.com/blog">Blog <span></span></a>
            <a href="#portofolio">Portofolio <span></span></a>
            <a href="#project">Project <span></span></a>
        </nav>

        <div class="headkanan">
            <a href="{{ route('member') }}" class="buttonnya"><button>Member Area</button> </a>
            <button class="togglemobilemenu">
                <img src="{{ asset('assets/img/menu.svg') }}" alt="mobile menu" />
            </button>
        </div>
    </header>

    <div class="m-mobile">
        <span class="m-close">x</span>
        <ul>
            <li><a href="#about">About</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#portofolio">Portofolio</a></li>
            <li><a href="#project">Project</a></li>
        </ul>
    </div>

    <main>
        <section id="first" class="hcon">

            <div class="lingkanan"></div>
            <div class="isikonten">
                <div class="kontenkiri">
                    <h2 class="judulin">
                        Hi, I'm
                        <span> Guntur </span>
                    </h2>
                    <p class="jteks">The Leading Digital Solution in the Digital Era to Boost Your Business
                        Productivity and Innovation</p>
                    <div class="divbtncv">
                        <a
                            href="https://api.whatsapp.com/send?phone=6287779909065&amp;text=Halo%2C%20saya%20menghubungi%20melalui%20guntursatya.com.%20Saya%20ingin%20bekerja%20sama%20dengan%20Anda.">
                            <button class="btncv"> Contact </button> </a>

                        {{-- <button class="btncv">CV</button> --}}
                    </div>
                    <div class="socials">
                        <a href="https://www.linkedin.com/in/guntursatya/" rel="nofollow">
                            <div class="linkedinn">
                                <img src="{{ asset('assets/img/linkedin.svg') }}" alt="logo linkedin" />
                                <span> linkedin </span>
                            </div>
                        </a>
                        <a href="https://www.instagram.com/guntursatya/" rel="nofollow">
                            <div class="igku">
                                <img src="{{ asset('assets/img/kecil/insta.svg') }}" alt="logo instagram">
                                <span> instagram </span>
                            </div>
                        </a>
                        <!-- <a href="https://www.linkedin.com/in/guntursatya/" rel="nofollow">
                    <div class="linkedinn">
                        <img src="img/linkedin.svg" alt="">
                        <span>
                            linkedin
                        </span>
                    </div>
                </a> -->
                    </div>
                </div>
                <div class="kontenkanan">
                    <img src="{{ asset('assets/img/herokanan.webp') }}" alt="hero image" />
                </div>
            </div>
        </section>
        <section id="about" class="aboutin">
            <div class="aboutku">
                <div class="fotoin"></div>
                <div class="aboutku"></div>
            </div>
        </section>
        <section loading="lazy" id="skills" class="skillin">
            <img src="{{ asset('assets/img/kecil/skillsanim.webp') }}" class="animeinskill" alt="animeskill">
            <div class="skillku">
                <h2>My <span>Skills <span class="garis"></span></span></h2>
                <div class="bisaapa">
                    <div class="seoin">
                        <div class="gambarnya">
                            <img loading='lazy' src="{{ asset('assets/img/seo.webp') }}" alt="" />
                        </div>
                        <div class="skillhover">
                            <!-- <p class="portfoliotag">SEO</p> -->
                            <h3>Search Engine Optimization</h3>
                        </div>
                    </div>
                    <div class="webdev">
                        <div class="gambarnya">
                            <img loading='lazy' src="{{ asset('assets/img/webdev.webp') }}" alt="" />
                        </div>
                        <div class="skillhover">
                            <!-- <p class="portfoliotag">Software Development</p> -->
                            <h3>Software Development</h3>
                        </div>
                    </div>
                    <div class="digmar">
                        <div class="gambarnya">
                            <img loading='lazy' src="{{ asset('assets/img/digimarke.webp') }}" alt="" />
                        </div>
                        <div class="skillhover">
                            <!-- <p class="portfoliotag">Web Application</p> -->
                            <h3>Digital Marketing</h3>
                        </div>
                    </div>
                    <div class="copyw">
                        <div class="gambarnya">
                            <img loading='lazy' src="{{ asset('assets/img/copyw.webp') }}" alt="" />
                        </div>
                        <div class="skillhover">
                            <!-- <p class="portfoliotag">Web Application</p> -->
                            <h3>Copywriting</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <section id="footers" class="footerin">
            <div class="formfoot">
                <p>Contact me</p>
                <h3>Let's Connect</h3>
                <form action="">
                    <input type="text" placeholder="Name" />
                    <input type="email" placeholder="Email" />
                    <input type="text" placeholder="Subject" />
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                    <button type="submit">Send</button>
                </form>
            </div>
        </section> --}}
    </main>

    <footer loading="lazy">
        <div class="footkiri">
            <p>© 2020 GunturSatya</p>
        </div>
        <div class="footkanan">
            <p>Design by GunturSatya</p>
        </div>
    </footer>
    <script defer>
        const mClose = document.querySelector(".m-close");
        const mMobile = document.querySelector(".togglemobilemenu");
        const mobileMenu = document.querySelector(".m-mobile");

        mMobile.addEventListener("click", () => {
            mobileMenu.style.top = "0";
            mobileMenu.style.right = "0";
            mobileMenu.style.zIndex = "99999";
        });

        mClose.addEventListener("click", () => {
            mobileMenu.style.top = "-100vh";
            mobileMenu.style.right = "-100vw";
            mobileMenu.style.zIndex = "-99999";
        });
    </script>

</body>

</html>
