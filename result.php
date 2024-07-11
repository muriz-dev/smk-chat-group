<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMK Group Chat Finder</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-light">
    <div class="container bg-success text-center p-5">
        <img src="assets/img/cn.png" alt="" width="auto" height="112px" class="mb-4">
        <h3 class="text-white fw-normal">Selamat Datang <span class="fw-bold"><?= $_SESSION['nama'] ?></span></h3>
        <p class="text-white">Sebagai Peserta MPLS SMK CITRA NEGARA 2024</p>
    </div>
    <div class="container border-start border-end border-bottom bg-light p-4">
        <div class="mb-3">
            <label class="form-label">Nomor Pendaftaran</label>
            <input type="text" class="form-control" value="<?= $_SESSION['nomor_pendaftaran'] ?>" readonly>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" value="<?= $_SESSION['nama'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" class="form-control" value="<?= $_SESSION['jurusan'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Asal Sekolah</label>
            <input type="text" class="form-control" value="<?= $_SESSION['asal_sekolah'] ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Tanggal Daftar</label>
            <input type="text" class="form-control" value="<?= $_SESSION['tanggal_daftar'] ?>">
        </div>
        <a href="<?= $_SESSION['link'] ?>">
            <button class="btn fw-medium btn-success w-100 mt-3">Gabung Obrolan Grup</button>
        </a>
        <a href="controllers/LogoutController.php">
            <button class="btn fw-medium btn-danger w-100 mt-3">Keluar</button>
        </a>
    </div>
</body>

</html>
