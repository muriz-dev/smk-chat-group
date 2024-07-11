<?php 
    session_start();

    if (isset($_SESSION['login'])) {
        header("Location: index.php");
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

<body class="container-fluid bg-success">
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form action="<?= htmlspecialchars('controllers/SiswaGroupController.php') ?>" method="POST" class="container bg-white p-4 rounded">
            <div class="text-center py-4">
                <img src="assets/img/cn.png" alt="" width="auto" height="112px" class="mb-4">
                <h1>MPLS 2024</h1>
                <p>SMK Citra Negara</p>
            </div>
            <div class="form-floating mb-3">
                <input name="nomor" type="number" class="form-control" id="floatingInput" placeholder="XXXXXXX"onkeydown="return event.keyCode !== 69 && event.keyCode !== 187 && event.keyCode !== 189" required>
                <label for="floatingInput">Nomor pendaftaran</label>
                <div class="form-text">Pastikan nomor pendaftaran yang dimasukkan benar.</div>
            </div>
            <button type="submit" class="btn btn-primary w-100 mb-4">Masuk</button>
            <hr>
            <footer class="text-center">
                <p class="fs-6">© 2024 SMK Citra Negara. All Rights Reserved.</p>
            </footer>
        </form>
    </div>
</body>

</html>
