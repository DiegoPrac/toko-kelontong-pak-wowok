@extends('layout')

@section('content')

<h1>Dashboard Toko</h1>

<p>Ringkasan data produk Toko Kelontong Pak Wowok.</p>

<hr>

<h3>Jumlah Produk</h3>
<p>{{ $jumlahProduk }} produk</p>

<h3>Total Stok Barang</h3>
<p>{{ $totalStok }} barang</p>

<hr>

<a href="{{ route('products.index') }}">
    Lihat Daftar Produk
</a>

@endsection
