@extends('member.layouts.master')

@section('title')
    My Product
@endsection

@section('konten')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>My Products</h3>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Download</h4>
                </div>
                <div class="card-body">
                    @if (Auth::user()->hasproduct)
                        @php
                            $produknya = Auth::user()->hasproduct;
                            $products = explode(',', $produknya);
                        @endphp
                        @foreach ($products as $product)
                            @php
                                $trimmedProduct = trim($product);
                            @endphp
                            @if ($trimmedProduct === 'satriaberita')
                                <p>
                                    Produk yang kamu miliki: Plugin SatriaBerita
                                </p>
                                <p>
                                    
                                <a href="https://drive.google.com/file/d/19pDV9fl1klMEesAnPqjoVmAfOkpyrqKu/view?usp=sharing">
                                    Dapatkan update 1.9.1 Versi AI dan Non AI
                                </a>
                                </p>
                                <p>Update 23-06-2024</p>
                                <p>
                                    Download Versi 2.1.0 NON AI: <a target='_blank' href='https://drive.google.com/file/d/1UXVNZrkPwse7NIMZtQ__2ZNV5BhOwE4f/view?usp=sharing'>Download</a>
                                </p>
                                 <p>Update 23-06-2024</p>
                                <p>
                                    Download Versi 2.1.0 Gemini AI: <a target='_blank' href='https://drive.google.com/file/d/1YnKsEPBGMKg9-3VetuxoZYWqfmN340RF/view?usp=sharing'>Download</a>
                                </p>
                                <p>Versi AI ChatGPT menyusul</p>
                                @if (Auth::user()->type_user === 'vip')
                                    <p class="mt-3">Kamu punya produk VIP</p>
                                    <a href="#">Download</a>
                                @endif
                            @elseif ($trimmedProduct === 'animein')
                                <p>
                                    Produk yang kamu miliki: Script Anime
                                </p>
                                <a target='_blank'
                                    href="https://drive.google.com/file/d/1nZsXYE7Oi0TVKjcntpqk6XciXV0s9tUf/view?usp=drive_link">
                                    Dapatkan File
                                </a>
                            @elseif ($trimmedProduct === 'animdanber')
                                <p>
                                    Produk yang kamu miliki: Anime dan Plugin SatriaBerita
                                </p>
                                <p>
                                    Plugin SatriaBerita
                                </p>
                                <p>
                                    <a
                                        href="https://drive.google.com/file/d/19pDV9fl1klMEesAnPqjoVmAfOkpyrqKu/view?usp=sharing">
                                        Dapatkan update 1.9.1 Versi AI dan Non AI
                                    </a>
                                </p>
                                <p>
                                    Script Anime:
                                    <a
                                        href="https://drive.google.com/file/d/1nZsXYE7Oi0TVKjcntpqk6XciXV0s9tUf/view?usp=drive_link">
                                        Dapatkan File
                                    </a>
                                </p>
                            @endif
                        @endforeach
                    @else
                        Tidak ada produk aktif. Untuk lakukan pembelian sekarang masih manual, hubungi via WA, Tele atau FB
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
