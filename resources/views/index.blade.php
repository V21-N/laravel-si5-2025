<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UTS Laravel - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
     <nav class="navbar bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand brand-judul" href="#">UTS Laravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuSamping" aria-controls="menuSamping" aria-label="Buka menu">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="menuSamping" aria-labelledby="judulMenuSamping">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="judulMenuSamping">UTS Laravel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Tutup"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/produk">Produk</a>
            </li>
            </ul>
            <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Cari"/>
            <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
        </div>
        </div>
    </div>
        <div class="container">
            <h1>Halaman Home</h1>
            <br>
        </div>
    </nav>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>