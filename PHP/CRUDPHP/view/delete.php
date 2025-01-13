<!-- Header -->
<?php include "../header.php"; ?>

<?php
if (isset($_GET['delete'])) {
    // Ambil nilai user ID dari URL
    $userid = $_GET['delete'];

    // Validasi ID untuk menghindari serangan SQL Injection
    $userid = intval($userid);

    // SQL query untuk menghapus data dari tabel users berdasarkan ID
    $query = "DELETE FROM users WHERE ID = {$userid}";
    $delete_query = mysqli_query($conn, $query);

    // Redirect ke halaman home.php setelah penghapusan
    if ($delete_query) {
        header("Location: home.php");
        exit;
    } else {
        echo "<div class='alert alert-danger'>Error deleting user: " . mysqli_error($conn) . "</div>";
    }
}
?>

<!-- Footer -->
<?php include "../footer.php"; ?>