<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    
    <nav class="navbar bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UTS Laravel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-label="Buka menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Aplikasi Inventaris</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produk">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/tambah">Tambah Produk</a>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Cari..." aria-label="Cari"/>
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 80px;">
        <h2>Form Tambah Produk</h2>

        <form action="" method="POST" class="row my-3">
            @csrf
            <div class="col-12 col-md-4 mb-3">
                <label for="kode_produk" class="form-label">Kode Produk</label>
                <input type="text" id="kode_produk" name="kode_produk" class="form-control" placeholder="Masukkan Kode Produk" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="nama_produk" class="form-label">Nama Produk</label>
                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Masukkan Nama Produk" required>
            </div>
            <div class="col-12 col-md-4 mb-3">
                <label for="jenis_produk" class="form-label">Jenis Produk</label>
                <select id="jenis_produk" name="jenis_produk" class="form-control" required>
                    <option selected value="">Pilih Produk</option>
                    @foreach($products_type as $type)
                        <option value="{{ $type['jenis'] }}">{{ $type['jenis'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 col-md-6 mb-3">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="number" id="harga_produk" name="harga_produk" class="form-control" placeholder="Input Harga" required>
            </div>
            <div class="col-12 col-md-6 mb-3 d-flex align-items-end">
                <button type="submit" class="btn btn-success" style="width: 100%;">Simpan Data</button>
            </div>
        </form>
    </div>
    
</body>
</html>