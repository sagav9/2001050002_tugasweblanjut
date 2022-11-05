<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/dist/css/bootstrap.css') ?>">
</head>

<body>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Tugas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tambah Data</a>
                    </li>
                </ul>
            </div>
            <a class="nav-link text-right" href="#">Ahmad Ihza Aditya</a>
        </div>
    </nav>

    
    <div class="alert alert-primary text-center mt-3" role="alert">
       <h3> AHMAD IHZA ADITYA / 2001050002 </h3>
    </div>

    <div class="card">
  <div class="card-header">
    DATA MAHASISWA
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      
    <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">Nomor</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>ihza</td>
      <td>2001050002</td>
      <td>Mataram</td>
      <td><button type="button" class="btn btn-warning">edit</button>
      <button type="button" class="btn btn-danger">delete</button></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>aditya</td>
      <td>2001050002</td>
      <td>Mataram</td>
      <td><button type="button" class="btn btn-warning">edit</button>
        <button type="button" class="btn btn-danger">delete</button></td>
    </tr>

    
  </tbody>
</table>
</blockquote>
  </div>
</div>
</div>
</body>

</html>