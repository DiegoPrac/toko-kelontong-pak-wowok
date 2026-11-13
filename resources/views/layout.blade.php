<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Toko Kelontong Pak Wowok</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            color: #333;
            margin: 0;
        }

        header {
            background: #316b45;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 950px;
            margin: 30px auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
        }

        h1 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background: #e8f0e9;
        }

        a, button {
            display: inline-block;
            padding: 8px 12px;
            background: #316b45;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .hapus {
            background: #b64242;
        }

        input, select {
            display: block;
            padding: 9px;
            width: 100%;
            box-sizing: border-box;
            margin: 6px 0 15px;
        }

        .pesan {
            background: #e0f2df;
            padding: 12px;
            margin: 15px 0;
        }

        .error {
            color: #b64242;
            font-size: 14px;
        }

        .tabel {
            overflow-x: auto;
        }
    </style>
</head>
<body>

    <header>
        <h2>Toko Kelontong Pak Wowok</h2>
        <p>Pencatatan Produk dan Stok Barang</p>
    </header>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
