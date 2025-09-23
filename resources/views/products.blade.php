<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 p-6">

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <style>
        body {
            background: #f4f5fa;
            font-family: Arial, sans-serif;
        }
        
        h2 {
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th {
            background: #232e3c;
            color: #fff;
            padding: 12px 8px;
            text-align: left;
        }
        td {
            padding: 10px 8px;
            border-bottom: 1px solid #f0f0f0;
        }
        .harga {
            color: #22bb33;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Produk</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td class="harga">Rp{{ number_format($product->price,0,',','.') }}</td>
                    <td>{{ $product->description }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3">Tidak ada produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
   
