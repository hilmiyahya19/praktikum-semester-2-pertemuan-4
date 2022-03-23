<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB 02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Review PHP
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        PHP05 OOP
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li>
                    <ul>
                            <nav class="navbar navbar-light bg-light">
                            <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                                </nav>
                    </ul>
                </li>

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li> -->

            </div>
        </div>
    </nav>

<br>

<div class="container">
    <div class="container-fluid">
        <div>
            <p>Show Entries</p> 
            <input type="number">
            <form class="d-flex float-end">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</div>

<br>
<br>

<?php
require_once 'class_mahasiswa1.php';

    $mahasiswa1 = new Mahasiswa ("02011", "Faiz Fikri");
    $mahasiswa1->prodi = "TI";
    $mahasiswa1->thn_angkatan=2012;
    $mahasiswa1->ipk=3.8;

    $mahasiswa2 = new Mahasiswa ("02012", "Alissa Khairunnissa");
    $mahasiswa2->prodi = "TI";
    $mahasiswa2->thn_angkatan=2012;
    $mahasiswa2->ipk=3.9;

    $mahasiswa3 = new Mahasiswa ("01011", "Rosalie Naurah");
    $mahasiswa3->prodi = "SI";
    $mahasiswa3->thn_angkatan=2010;
    $mahasiswa3->ipk=3.46;

    $mahasiswa4 = new Mahasiswa ("01012", "Defgi Muhammad");
    $mahasiswa4->prodi = "SI";
    $mahasiswa4->thn_angkatan=2010;
    $mahasiswa4->ipk=3.2;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];

?>

<div class="container">
    <div class="align-items-center" style="padding: 60px">
    <table id="example" class="display" style="border: 1px solid black;"  >
        <thead>
            <tr class="bg-primary">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Tahun Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->prodi.'</td>'.
                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                $counter++;
            }
            ?>
        </tbody>
    </table>
    </div>
</div>

<footer class=" bg-light text-muted fixed-bottom">
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
    <div>
      <p><b>Pemrograman Web Lanjutan </b>| Mahasiswa : Hibrizi Atsir Mubarak | STT NF - 2022</p>
    </div>
  </div>
</footer>

</body>
</html>