@extends('layout')

@section('content')

<h1>
    {{ $product ? 'Edit Produk' : 'Tambah Produk' }}
</h1>

<p>Masukkan informasi produk di bawah ini.</p>

<form
    action="{{ $product
        ? route('products.update', $product)
        : route('products.store') }}"
    method="POST"
>
    @csrf

    @if($product)
        @method('PUT')
    @endif

    <label for="name">Nama Produk</label>

    <input
        type="text"
        id="name"
        name="name"
        value="{{ old('name', $product->name ?? '') }}"
        required
    >

    @error('name')
        <p class="error">{{ $message }}</p>
    @enderror

    <label for="category_id">Kategori</label>

    <select name="category_id" id="category_id" required>
        <option value="">-- Pilih Kategori --</option>

        @foreach($categories as $category)
            <option
                value="{{ $category->id }}"
                @selected(
                    old('category_id', $product->category_id ?? '')
                    == $category->id
                )
            >
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    @error('category_id')
        <p class="error">{{ $message }}</p>
    @enderror

    <label for="price">Harga (Rp)</label>

    <input
        type="number"
        id="price"
        name="price"
        min="0"
        value="{{ old('price', $product->price ?? '') }}"
        required
    >

    @error('price')
        <p class="error">{{ $message }}</p>
    @enderror

    <label for="stock">Jumlah Stok</label>

    <input
        type="number"
        id="stock"
        name="stock"
        min="0"
        value="{{ old('stock', $product->stock ?? '') }}"
        required
    >

    @error('stock')
        <p class="error">{{ $message }}</p>
    @enderror

    <button type="submit">
        {{ $product ? 'Simpan Perubahan' : 'Simpan Produk' }}
    </button>

    <a href="{{ route('products.index') }}">
        Kembali
    </a>
</form>

@endsection
