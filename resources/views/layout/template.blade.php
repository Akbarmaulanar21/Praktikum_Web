<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa | @yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="p-4 pt-5">
          <a href="https://github.com/Akbarmaulanar21" class="img logo rounded-circle mb-5"></a>
          <ul class="list-unstyled components mb-5">
            <li>
              <h4 style="color: white; text-align:center;">PRAKTIKUM PEMROGRAMAN WEB</h4>
            </li>
            <p style="font-size: small;margin-top: 3rem;">Administrator</p>
            </li>
            <li>
              <a href="{{ url('mahasiswa') }}"><button class="btn btn-outline-light">Dashbord</button></a>
            </li>
            <li>
              <p style="font-size: small; margin-top: 1rem;">interface</p>
              <a href='{{ url('mahasiswa/create') }}'><button class="btn btn-outline-light">Tambah Data</button></a>
            </li>
          </ul>
  
          <div class="footer">
            <p style="text-align: center;">
              Copyright &copy; Akbar Maulana R
            </p>
          </div>
  
        </div>
      </nav>
  
      <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5">
  
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
  
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
          </div>
        </nav>
    <main class="container">
        @include('komponen.pesan')

        @yield('content')
    </main>
  </div>
</div>
    <script src="/js/jquery.min.js">
      < /scr> <
      script src = "/js/popper.js" >
    </script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>