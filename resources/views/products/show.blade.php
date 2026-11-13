@extends('layout')

@section('content')

<h1>Detail Produk</h1>

<p>Informasi barang yang tersimpan di toko.</p>

<p>
    <strong>Nama Produk:</strong>
    {{ $product->name }}
</p>

<p>
    <strong>Kategori:</strong>
    {{ $product->category->name }}
</p>

<p>
    <strong>Harga:</strong>
    Rp{{ number_format($product->price, 0, ',', '.') }}
</p>

<p>
    <strong>Jumlah Stok:</strong>
    {{ $product->stock }}
</p>

<p>
    <strong>Kondisi Stok:</strong>

    @if($product->stock > 0)
        Tersedia
    @else
        Habis
    @endif
</p>

<a href="{{ route('products.index') }}">
    Kembali
</a>

@endsection
