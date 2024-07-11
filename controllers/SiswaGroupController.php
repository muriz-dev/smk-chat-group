<?php

require_once '../config/connection.php';

$nomorPendaftaran = htmlspecialchars($_POST['nomor']);

$query = "SELECT siswa.nomor_pendaftaran, siswa.nama, siswa.asal_sekolah, siswa.tanggal_daftar, jurusan.nama AS jurusan, jurusan.link FROM siswa JOIN jurusan ON siswa.jurusan=jurusan.id WHERE siswa.nomor_pendaftaran=$nomorPendaftaran";

$result = mysqli_query($connection, $query);

$data = mysqli_fetch_assoc($result);

session_start();

if ($data) {
    $_SESSION['login'] = true;

    $_SESSION['nomor_pendaftaran'] = $data['nomor_pendaftaran'];
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['jurusan'] = $data['jurusan'];
    $_SESSION['asal_sekolah'] = $data['asal_sekolah'];
    $_SESSION['tanggal_daftar'] = date_format(date_create($data['tanggal_daftar']), 'd/m/Y');
    $_SESSION['link'] = $data['link'];

    header('Location: ../result.php');
} else {
    session_destroy();

    echo "
        <script>
            alert('Data peserta didik tidak ditemukan, periksa kembali nomor pendaftaran.');
            window.location = '../index.php';
        </script>
    ";
}
