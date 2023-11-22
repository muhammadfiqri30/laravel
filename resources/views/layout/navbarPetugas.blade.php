<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstap-5.0.2-dist/js/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Petugas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url ('petugas')}}">Data Masyarakat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('verifikasi')}}">Verifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url ('tanggapan')}}">Tanggapan</a>
        </li>
      </ul>
      <form class="d-flex">
        <a href="{{url ('logoutPetugas')}}"><button class="btn btn-outline-danger" type="button">Logout</button></a>
      </form>
    </div>
  </div>
</nav>

<script src="bootstap-5.0.2-dist/js/bootstrap.min.js"></script>

</body>
</html>
