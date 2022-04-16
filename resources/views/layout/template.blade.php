<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>@yield('title')</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark" style="height: 60pt" style="color: white">
        <div class="container-fluid">
          <p  class="mt-3" style="padding-left:5pt"><img src="/img/LOGO.jpg"  alt="gambar" width="78" height="78"></p>
          <p class="nav-link mt-2" href="{{ route('Produks') }}" style="color: white">UDAYANA FRIED CHICKEN</p>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav" style="padding-left: 150px">
              <a class="nav-link" href="{{ route('Produks') }}" style="color: white">Paket Card</a>
              <a class="nav-link" href="{{ route('Produk') }}" style="color: white">Produk</a>
              <a class="nav-link" href="{{ route('Kategori') }}" style="color: white">Kategori</a>
              <a class="nav-link" href="{{ route('Paket') }}" style="color: white">Paket</a>
              <a class="nav-link" href="{{ route('DetailPaket') }}" style="color: white">Detail Paket</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="container">@yield('content')</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
