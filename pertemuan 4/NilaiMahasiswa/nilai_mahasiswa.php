<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nilai Mahasiswa</title>
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
</nav>
    <!-- Tittle  -->
    <br>
    <h2 class="ml-5">Form Nilai Ujian</h2>

    <br>
    <form method="post" action="">
    <div class="container">
        <div class="container-fluid">
            <form>
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nim" name="nim" type="number" class="form-control">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matakuliah" name="matakuliah" class="custom-select">
                    <option value="matematika">Matematika</option>
                    <option value="bahasa1">Bahasa Inggris</option>
                    <option value="bahasa2">Bahasa Indonesia</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" type="number" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            </form>
        </div>
    </div>
    </form>
    <div class="m-5 border border-primary p-4 rounded">
    <?php
        require_once 'class_nilaimahasiswa.php';

        $mahasiswa = new nilai_mahasiswa($_POST['nim'], $_POST['matakuliah'], $_POST['nilai']);
        if(isset($_POST['submit'])){
            echo "<hr>";
            echo "NIM : ".$nim = $_POST['nim'];
            echo "<br>Mata Kuliah : ".$matakuliah = $_POST['matakuliah'];
            echo "<br>Nilai : ".$nilai = $_POST['nilai'];
            echo "<br>Hasil Ujian : ".$mahasiswa->grade();
            echo "<br/>Grade : " .$mahasiswa->hasil();
        }
    ?>
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