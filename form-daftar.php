<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> <img width="40" src="https://cdn.pixabay.com/photo/2017/07/25/11/59/logo-2537871_960_720.png">
         </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form-daftar.php">Daftar Baru</a>
              </li>
              <li class="nav-item dropdown">
              <a class="nav-link" href="list-siswa.php">Pendaftaran</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
        
      
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>
        <h3 style="color:white;background-color:#0000ff;margin-left:10px;margin-right:10px;">Formulir Pendaftaran Siswa Baru</h3>
        <hr>
    </header>

    <form>
  <div class="mb-3">
    <label for="nama" style="margin-top:5px; margin-bottom: 2px; margin-left:10px;" class="form-label">Nama</label>
    <input type="text" name="nama" placeholder="" style="margin-top:5px; margin-bottom: 2px; margin-left:109px; border:solid 1px;" />
    <br>
  </div>
  <div class="mb-3">
    <label for="Alamat" style="margin-top:5px; margin-bottom: 2px; margin-left:10px;" class="form-label">Alamat</label>
    <textarea name="alamat" style="margin-top:5px; margin-bottom: 2px; margin-left:100px; border:solid 1px;"></textarea>
  </div>
  <div class="mb-3">
    <label for="jenis_kelamin" style="margin-top:5px; margin-bottom: 2px; margin-left:10px;">Jenis Kelamin </label>
    <label><input type="radio" name="jenis-kelamin" style="margin-top:5px; margin-bottom: 2px; margin-left:52px;" value="laki-laki"> Laki-Laki</label>
    <label><input type="radio" name="jenis-kelamin" style="margin-left:20px;" value="perempuan"> Perempuan</label>
  </div>
  <div class="mb-3 d-flex align-items-center">
    <label for="agama" style="margin-top:5px; margin-bottom: 2px; margin-left:10px;">Agama</label>
    <select class="form-select w-25 " name="agama" style="margin-top:2px; margin-bottom: 2px; margin-left:100px;">
        <option>Islam</option>
        <option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        <option>Atheis</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="sekolah_asal" style="margin-top:5px; margin-bottom: 2px; margin-left:10px;">Sekolah Asal: </label>
    <input type="text" name="sekolah_asal" placeholder="" style="margin-top:5px; margin-bottom: 2px; margin-left:52px; border:solid 1px;" />
  </div>

  <div class="mb-3 form-check"> 
  </div>
  <button type="submit" class="btn btn-primary" style="background-color: blue; box-shadow: 1px 2px; margin-top:10px;margin-bottom: 2px; margin-left:167px;">Daftar</button>
</form>
    
</body>
</html>