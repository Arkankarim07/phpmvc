<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.min.css">
  <title>halaman <?= $data['judul']; ?></title>
  <style>
    .jumbotron{
      background-color: #d3d3d3;
      color: black;
      border-radius: 5px;
    }
    
    img{
      height: 250px;
      object-fit: cover;
    }
  </style>
</head>

<!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container ms-auto ">
    <a class="navbar-brand" href="<?= BASEURL; ?>">PHP MVC</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/mahasiswa">Siswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<body>