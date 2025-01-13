<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../login.php");
    exit();
}
?>
<?php include '../includes/header.php'; ?>
<div class="container mt-5">
    <h2>Dashboard Admin</h2>
    <a href="add.php" class="btn btn-success">Tambah Tanaman</a>
</div>
<?php include '../includes/footer.php'; ?>