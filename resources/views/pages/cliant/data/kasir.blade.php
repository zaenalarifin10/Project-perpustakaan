@extends('layouts.client')
@section('title', 'Books | Dashboard')
@section('content')

<div class="col-12">
    <div class="card">
        <div class="page-header d-print-none">
            <div class="container-xl">
              <div class="row g-2 align-items-center">
                <div class="col">
                  <h2 class="page-title">
                    Data barang
                  </h2>
                </div>
              </div>
            </div>
          </div>
        <div class="card-body border-bottom py-3">
            <div class="ms-auto text-secondary">
                <form id="search-form" class="mb-3">
                    <input type="search" id="search-query" name="query" placeholder="Cari buku..." class="form-control" aria-label="Search">
                    <button type="submit" class="btn btn-primary mt-2">Cari</button>
                </form>
            </div>

            <div class="table-responsive">
                @if ($pinjams->isEmpty())
                <p style="text-align: center;">Anda belum meminjam buku</p>
            @else
                <table class="table card-table table-vcenter text-nowrap datatable">
                    <thead>
                        <tr class="text-center">
                            <th class="w-1">No</th>
                            <th>Judul Buku</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Dipinjam</th>
                            <th>Status</th>
                        </tr>
                    </thead>

                    <tbody id="results-container">
                        @foreach ($pinjams as $pinjam)
                        <tr class="text-center">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $pinjam->book->judul_buku }}</td>
                            <td>{{ $pinjam->user->name }}</td>
                            <td>{{ $pinjam->user->telepon }}</td>
                            <td>{{ $pinjam->dipinjam }}</td>
                            <td>{{ $pinjam->status }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
