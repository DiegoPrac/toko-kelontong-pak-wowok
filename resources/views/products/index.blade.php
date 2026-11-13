@extends('layout')

@section('content')

<h1>Daftar Produk</h1>

<a href="{{ route('dashboard') }}">
    Dashboard
</a>

<p>Halaman untuk melihat data barang yang ada di toko.</p>

<a href="{{ route('products.create') }}">
    + Tambah Produk
</a>

<form action="{{ route('products.index') }}" method="GET">

    <label for="cari">Cari Produk</label>

    <input
        type="text"
        id="cari"
        name="cari"
        placeholder="Masukkan nama produk..."
        value="{{ request('cari') }}"
    >

    <button type="submit">Cari</button>

    <a href="{{ route('products.index') }}">
        Tampilkan Semua
    </a>

</form>


@if(session('success'))
    <div class="pesan">
        {{ session('success') }}
    </div>
@endif

<div class="tabel">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->category->name }}</td>

                    <td>
                        Rp{{ number_format($product->price, 0, ',', '.') }}
                    </td>

<td>{{ $product->stock }}</td>

<td>
    <a href="{{ route('products.show', $product) }}">
        Detail
    </a>

    <a href="{{ route('products.edit', $product) }}">
        Edit
    </a>

    <form
        action="{{ route('products.destroy', $product) }}"
        method="POST"
        style="display:inline"
    >
        @csrf
        @method('DELETE')

        <button
            type="submit"
            class="hapus"
            onclick="return confirm('Yakin ingin menghapus produk?')"
        >
            Hapus
        </button>
    </form>
</td>
</tr>

            @empty
                <tr>
                    <td colspan="6">
                        Belum ada produk yang dicatat.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
