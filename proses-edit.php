<?php
include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['edit'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelami'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $sql = "UPDATE calon_siswa SET nama = $nama, alamat = $alamat, jenis_kelamin = $jk, agama = $agama, sekolah_asal = $sekolah WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if($query) {
        // kalau berhasil alihkan kehalaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan kehalaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}

?>
