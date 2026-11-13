<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{

// Menampilkan ringkasan data toko
public function dashboard()
{
    $jumlahProduk = Product::count();
    $totalStok = Product::sum('stock');

    return view('dashboard', compact('jumlahProduk', 'totalStok'));
}

// Menampilkan dan mencari produk
// Menampilkan dan mencari produk
public function index(Request $request)
{
    $products = Product::with('category');

    // Mencari produk berdasarkan nama
    if ($request->filled('cari')) {
        $products->where(
            'name',
            'like',
            '%' . $request->cari . '%'
        );
    }

    $products = $products->orderBy('name')->get();

    return view('products.index', compact('products'));
}

    // Form tambah produk
    public function create()
    {
        $categories = Category::all();

        return view('products.form', [
            'categories' => $categories,
            'product' => null,
        ]);
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        Product::create($data);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan detail satu produk
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Form edit produk
    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('products.form', compact(
            'product',
            'categories'
        ));
    }

    // Menyimpan perubahan produk
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'price' => 'required|integer|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $product->update($data);

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->with('success', 'Produk berhasil dihapus.');
    }
}
