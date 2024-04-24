<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Foto</title>
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
</head>

<style>
    body {
        background-color: #FF7F50;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-warning">
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

    <div class="container mt-3">
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="foto/Stock (17).jpg" class="card-img-top" style="height: 12rem;">
              <div class="card-footer text-center">
              <div onclick="klik()"> 
              <i class="fa-regular fa-heart"></i> 10 Like <i class="fa-regular fa-comment"></i> 3 Comment
              </div>

              <script>
                function klik() {
                    alert("ANDA BELUM LOGIN!");
                }
              </script>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="foto/Stock (18).jpg" class="card-img-top" style="height: 12rem;">
              <div class="card-footer text-center">
              <div onclick="klik()"> 
              <i class="fa-regular fa-heart"></i> 33 Like <i class="fa-regular fa-comment"></i> 18 Comment
              </div>

              <script>
                function klik() {
                    alert("ANDA BELUM LOGIN!");
                }
              </script>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="foto/Stock (19).jpg" class="card-img-top" style="height: 12rem;">
              <div class="card-footer text-center">
              <div onclick="klik()"> 
              <i class="fa-regular fa-heart"></i> 27 Like <i class="fa-regular fa-comment"></i> 12 Comment
              </div>

              <script>
                function klik() {
                    alert("ANDA BELUM LOGIN!");
                }
              </script>
              </div>
            </div>
          </div>
        </div>
    </div>


<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html> 