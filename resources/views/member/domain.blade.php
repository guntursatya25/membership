@extends('member.layouts.master')

@section('title')
    Domains
@endsection

@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Domain</h3>
            </div>
        </div>
    </div>
</div>
<section class="section">
    <div class="card">
        <div class="card-body">
        @if (Auth::user()->hasproduct)
        <p>User: {{ $usernya->name }}</p>
        <div class="table-responsive">
            <table class="table table-dark mb-0">
              <thead>
                <tr>
                  <th>Domain</th>
                  <th>PRODUK</th>
                  <th>ACTION</th>
                </tr>
              </thead>
              <tbody>
                @if ($usernya->DaftarDomain->isEmpty())
                    <tr>
                        <td colspan="3">Belum ada data.</td>
                    </tr>
                    @else
                        @foreach ($usernya->DaftarDomain as $item)
                            <tr>
                                <td>{{ $item->domain }}</td>
                                <td>{{ ucwords($item->product) }}</td>
                                <td>
                                    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit{{ $item->id }}">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                @endif
              </tbody>
            </table>
          </div>
        <div class="row mt-3">
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-dismissible show fade">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <form action="{{ route('savedaftardomain') }}" method="POST">
                @csrf
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="product">Pilih Produk:</label>
                        @php
                        $products = explode(',', $usernya->hasproduct);
                        $trimmedProducts = [];
                        @endphp
                        <select name="hasproductnya" id="product" class="form-control round">
                            @foreach ($products as $produk)
                                <option value="{{ $produk }}">{{ $produk }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="domainnya">Domain</label>
                        <input type="text" name="domainnya" id="domainnya" class="form-control round" placeholder="Domain">
                    </div>
                    <input type="hidden" name="idnya" value="{{ $usernya->id }}">
                    {{-- <input type="hidden" name="hasproductnya" value="{{ $usernya->hasproduct }}"> --}}
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
        @else
            <p>Kamu tidak punya produk</p>
        @endif
    </div>
</div>
</section>
@endsection
@section('modalin')
@foreach ($usernya->DaftarDomain as $mod)
<div class="modal fade" id="edit{{ $mod->id }}" tabindex="-1" aria-labelledby="editModalLabel"
    aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">

        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Delete domain {{ $mod->domain }}?
          </div>
          <div class="modal-footer">
            <form action="{{ route('deletedaftardomain') }}" method="POST">
            @csrf
            <input type="hidden" name="iddeleted" value="{{ $mod->id }}">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
          </div>
        </div>
      </div>
</div>
@endforeach
@endsection