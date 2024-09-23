@extends('member.layouts.master')

@section('title')
    Member
@endsection

@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Welcome, {{ Auth::user()->name }}</h3>
                    {{-- <p class="text-subtitle text-muted">
                        Navbar will appear on the top of the page.
                    </p> --}}
                </div>
                {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/member">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Layout Vertical Navbar
                            </li>
                        </ol>
                    </nav>
                </div> --}}
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pengumuman</h4>
                </div>
                <div class="card-body">
                    <p>
                        Gabung grup telegram di https://t.me/+m-M_2_fcmU82ZDI1 atau klik <a
                            href="https://t.me/+m-M_2_fcmU82ZDI1">disini</a>
                    </p>
                    <p>
                        Whatsapp : +6287779909065
                    </p>
                    <hr />
                    <p>
                        Info penting!
                    </p>
                    <p>Untuk plugin SatriaBerita v2.1.0 sudah rilis tanggal 05-08-2024</p>
                    <p>Untuk plugin SatriaBerita v2.1.0 + Gemini AI sudah rilis tanggal 05-08-2024</p>
                    <p>Untuk plugin SatriaBerita v1.9.1 + AI sudah rilis tanggal 14-01-2024</p>
                    <p>Untuk script anime streaming, bakal di buat ulang. Untuk yang sudah membeli akan
                        dihubungi kembali</p>
                    <hr />
                    <p>Website ini masih dalam pengembangan, untuk saat ini pembelian masih manual. Hubungi lewat FB, Wa
                        atau di Grup Tele</p>
                    {{-- <p>
                        In case you want the navbar to be sticky on top while
                        scrolling, add <code>.navbar-fixed</code> class alongside
                        with <code>.layout-navbar</code> class.
                    </p> --}}
                </div>
            </div>
            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dummy Text</h4>
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                        mollis tincidunt tempus. Duis vitae facilisis enim, at
                        rutrum lacus. Nam at nisl ut ex egestas placerat sodales id
                        quam. Aenean sit amet nibh quis lacus pellentesque venenatis
                        vitae at justo. Orci varius natoque penatibus et magnis dis
                        parturient montes, nascetur ridiculus mus. Suspendisse
                        venenatis tincidunt odio ut rutrum. Maecenas ut urna
                        venenatis, dapibus tortor sed, ultrices justo. Phasellus
                        scelerisque, nibh quis gravida venenatis, nibh mi lacinia
                        est, et porta purus nisi eget nibh. Fusce pretium vestibulum
                        sagittis. Donec sodales velit cursus convallis sollicitudin.
                        Nunc vel scelerisque elit, eget facilisis tellus. Donec id
                        molestie ipsum. Nunc tincidunt tellus sed felis vulputate
                        euismod.
                    </p>

                </div>
            </div> --}}
        </section>
    </div>
@endsection
