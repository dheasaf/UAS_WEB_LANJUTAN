{{-- resources/views/barang/detail.blade.php --}}

@extends('layouts.app')

@section('title', 'Detail Barang')

@section('contents')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail Barang</h6>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="kode_barang">Kode Barang</label>
                <input type="text" class="form-control" id="kode_barang" value="{{ $barang->kode_barang }}" readonly>
            </div>
            <div class="form-group">
                <label for="nama_barang">Nama Barang</label>
                <input type="text" class="form-control" id="nama_barang" value="{{ $barang->nama_barang }}" readonly>
            </div>
            <div class="form-group">
                <label for="id_kategori">Kategori Barang</label>
                <input type="text" class="form-control" id="id_kategori" value="{{ $barang->kategori->nama }}" readonly>
            </div>
            <div class="form-group">
                <label for="harga">Harga Barang</label>
                <input type="text" class="form-control" id="harga" value="{{ $barang->harga }}" readonly>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="text" class="form-control" id="jumlah" value="{{ $barang->jumlah }}" readonly>
            </div>

            <!-- Tombol Kembali ke Data Barang -->
            <a href="{{ route('barang') }}" class="btn btn-danger">Kembali</a>
        </div>
    </div>
@endsection
