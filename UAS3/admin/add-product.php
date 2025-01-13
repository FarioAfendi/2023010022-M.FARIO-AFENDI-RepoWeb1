<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}

include '../db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $query = "INSERT INTO plants (name, description, price) VALUES ('$name', '$description', '$price')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location.href = 'dashboard.php';</script>";
    } else {
        echo "<script>alert('Terjadi kesalahan!');</script>";
    }
}

include '../header.php';
?>
<div class="container mt-5">
    <h2>Tambah Tanaman</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="name" class="form-label">Nama Tanaman</label>
            <input type="text" class="form-control" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description" required></textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Harga</label>
            <input type="number" class="form-control" name="price" required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
<?php include '../footer.php'; ?>