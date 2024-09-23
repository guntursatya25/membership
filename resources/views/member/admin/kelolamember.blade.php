@extends('member.layouts.master')
@section('title')
    Kelola Member
@endsection
@section('cssthis')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/member/extensions/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/member/compiled/css/table-datatable.css') }}">
@endsection
@section('konten')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Produk</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($user as $userin)
                            <tr>
                                <td>{{ $userin->name }}</td>
                                <td>{{ $userin->email }}</td>
                                <td>{{ $userin->username }}</td>
                                <td>
                                    @php
                                        $products = explode(',', $userin->hasproduct);
                                        $formattedProducts = [];

                                        foreach ($products as $product) {
                                            $product = trim($product);

                                            if ($product === 'satriaberita') {
                                                $formattedProducts[] = 'Plugin Satriaberita';
                                            } elseif ($product === 'animein') {
                                                $formattedProducts[] = 'Script Anime';
                                            } else {
                                                $formattedProducts[] = ucwords($product);
                                            }
                                        }

                                        $formattedString = implode(', ', $formattedProducts);
                                    @endphp
                                    {{ $formattedString }}
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#edit{{ $userin->id }}">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('modalin')
    <!-- Edit Modal -->
    @foreach ($user as $mod)
        <div class="modal fade" id="edit{{ $mod->id }}" tabindex="-1" aria-labelledby="editModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="editModalLabel">Edit User: {{ $mod->username }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('updatemem') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <input class="form-control" type="hidden" name="id" id="id"
                                value="{{ $mod->id }}">

                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="namanya">Nama: </label>
                                </div>
                                <div class="col-lg-6 col-7">
                                    <input class="form-control" type="text" value="{{ $mod->name }}" name="namanya"
                                        id="namanya">
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="email">Email: </label>
                                </div>
                                <div class="col-lg-6 col-7">
                                    <input class="form-control" type="text" value="{{ $mod->email }}" name="email"
                                        id="email">
                                </div>
                            </div>


                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="hasproduct">Produk: </label>
                                </div>
                                <div class="col-lg-6 col-7">
                                    <select class="select2" multiple="multiple" style="width: 200px"
                                        id="selectProduct-{{ $mod->id }}">
                                        <option disabled>Produk</option>
                                        <option value="satriaberita"
                                            {{ in_array('satriaberita', explode(', ', $mod->hasproduct)) ? 'selected' : '' }}>
                                            Plugin SatriaBerita
                                        </option>
                                        <option value="animein"
                                            {{ in_array('animein', explode(', ', $mod->hasproduct)) ? 'selected' : '' }}>
                                            Script Anime
                                        </option>
                                    </select>
                                    <input type="hidden" name="hasproduct" id="hasproductnya">
                                </div>

                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="email">Type User: </label>
                                </div>
                                <div class="col-lg-6 col-7">
                                    <select class="form-control" name="type_user" id="type_user">
                                        <option value="" disabled selected>Pilih type user</option>
                                        <option value="premium" {{ $mod->type_user == 'premium' ? 'selected' : '' }}>Premium</option>
                                        <option value="free" {{ $mod->type_user == 'free' ? 'selected' : '' }}>Free</option>
                                        <option value="vip" {{ $mod->type_user == 'vip' ? 'selected' : '' }}>VIP</option>
                                    </select>

                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-3 col-3">
                                    <label class="col-form-label" for="valid_time">Valid Time VIP: </label>
                                </div>
                                <div class="col-lg-6 col-7">
                                    <input class="form-control" type="datetime-local" id="valid_time" name="valid_time" value="{{ $mod->valid_time }}">

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary"
                                onclick="getSelectedOptions('#edit{{ $mod->id }}')">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('skrip')
    <script src="{{ asset('assets/member/extensions/jquery/jquery.min.js') }}"></script>
    {{-- <script src="https://cdn.datatables.net/v/bs5/dt-1.12.1/datatables.min.js"></script> --}}

    {{-- <script src="{{ asset('assets/member/static/js/pages/datatables.js') }}"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            @foreach ($user as $mod)
                $('#selectProduct-{{ $mod->id }}').select2();
            @endforeach
        });
    </script>
    <script>
        function getSelectedOptions(modalId) {
            var selectedValues = $(modalId + ' .select2').val();
            var selectedValuesText = selectedValues.join(', ');
            $(modalId + ' #hasproductnya').val(selectedValuesText);
            // console.log("Selected values: " + selectedValues);
        }
    </script>
    <script src="{{ asset('assets/member/extensions/simple-datatables/umd/simple-datatables.js') }}"></script>
    <script src="{{ asset('assets/member/static/js/pages/simple-datatables.js') }}"></script>
@endsection
