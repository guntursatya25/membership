@extends('member.layouts.master')

@section('title')
    Produk
@endsection

@section('konten')
    <div class="row">
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Plugin SatriaBerita</h4>
                        {{-- <p class="card-text">
                            Gummies bonbon apple pie fruitcake icing biscuit apple
                            pie jelly-o sweet roll. Toffee sugar plum sugar plum
                            jelly-o jujubes bonbon dessert carrot cake.
                        </p> --}}
                    </div>
                    <img class="img-fluid w-100" src="{{ asset('assets/img/products/satria.png') }}" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span>Rp200K</span>
                    <a href="https://api.whatsapp.com/send?phone=6287779909065&text=Halo%2C%20saya%20tertarik%20plugin%20SatriaBerita.%20Saya%20ingin%20melakukan%20pembelian.">
                    <button class="btn btn-light-primary">Buy Now</button></a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h4 class="card-title">Plugin ReTikel</h4>
                        {{-- <p class="card-text">
                            Gummies bonbon apple pie fruitcake icing biscuit apple
                            pie jelly-o sweet roll. Toffee sugar plum sugar plum
                            jelly-o jujubes bonbon dessert carrot cake.
                        </p> --}}
                    </div>
                    <img class="img-fluid w-100" src="{{ asset('assets/img/products/retikel.png') }}" alt="Card image cap">
                </div>
                <div class="card-footer d-flex justify-content-between">
                    <span>Rp40K</span>
                    <a href="https://api.whatsapp.com/send?phone=6287779909065&text=Halo%2C%20saya%20tertarik%20plugin%20ReTikel.%20Saya%20ingin%20melakukan%20pembelian.">
                    <button class="btn btn-light-primary">Buy Now</button></a>
                </div>
            </div>
        </div>
    </div>
@endsection
