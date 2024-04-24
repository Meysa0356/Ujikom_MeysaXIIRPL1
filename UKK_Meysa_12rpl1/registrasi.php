<!DOCTYPE html>
<html>
<head>
    <meta charset="utf‐8">
    <meta name="viewport" content="width=device‐width, initial‐scale=1">
    <title>Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">  
</head>

<style>
    body {
        background-color: #FF7F50;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-warning ">
    <div class="container">
        <a class="navbar-brand" href="index.php">Galeri Foto</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
        <div class="navbar-nav me-auto">
        </div>
        <a href="registrasi.php" class="btn btn-outline-primary m-1">Registrasi</a>
        <a href="login.php" class="btn btn-outline-success m-1">Login</a>
        </div>
    </div>
    </nav>   

    <div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                <div class="text-center">
                    <h5>Daftar Akun Baru</h5>
                </div>
                <form action="config/aksi_registrasi.php" method="POST">
                    <label class="from-label">Username</label>
                    <input type="text" name="username" class="form-control" required>

                    <label class="from-label">Password</label>
                    <input type="password" name="password" class="form-control" required>

                    <label class="from-label">Email</label>
                    <input type="Email" name="email" class="form-control" required>

                    <label class="from-label">Nama Lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" required>

                    <label class="from-label">Alamat</label>
                    <input type="text" name="alamat" class="form-control" required>

                    <div class="mt-2">
                        <button class="btn btn-primary" type="submit" name="kirim">Registrasi</button>
                </form>
                <hr>
                <p>SUDAH PUNYA AKUN? <a href="login.php">LOGIN DISINI!</a></p>     
            </div>
        </div>
    </div>   
    </div>  


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>