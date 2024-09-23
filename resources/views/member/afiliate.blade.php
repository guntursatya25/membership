@extends('member.layouts.master')

@section('title')
    Affiliate
@endsection

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Affiliate</h3>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
            <p>User: {{ $usernya->name }}</p>
            <p>Link daftar: {{ route('register') }}?reff={{ $usernya->username }}</p>
            {{-- <p>Link detail produk: https://guntursatya.com/lp/satriaberita/?reff={{ $usernya->username }}</p> --}}
            <div class="table-responsive">
                <table class="table table-dark mb-0">
                    <thead>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Product</th>
                    </thead>
                    <tbody>
                        @if ($useraff->isEmpty())
                        <tr>
                            <td colspan="3">Belum ada data.</td>
                        </tr>
                        @else
                        <tr>
                            @foreach ($useraff as $affu)
                                
                            <td>{{ $affu->name }}</td>
                            <td>{{ $affu->username }}</td>
                            <td>
                                @if ($affu->hasproduct === null)
                                Tidak ada
                                @else
                                {{ $affu->hasproduct }}
                                @endif
                            
                            </td>
                            @endforeach

                        </tr>

                        @endif
                    </tbody>
                </table>
                {{-- {{ $useraff }} --}}
            </div>
        </div>
    </div>
</section>

@endsection
@section('skrip')

@endsection