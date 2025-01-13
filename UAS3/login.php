<?php
session_start();
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query untuk memeriksa data user
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Periksa password
        if ($password === $user['password']) {
            $_SESSION['admin'] = $user['username'];
            header("Location: admin/dashboard.php");
            exit();
        } else {
            $error = "Password salah!";
        }
    } else {
        $error = "Username tidak ditemukan!";
    }
}

include 'includes/header.php';
?>

<div class="container mt-5">
    <h2 class="text-center">Login Admin</h2>
    <form method="POST" class="mt-4 mx-auto" style="max-width: 400px;">
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?= $error; ?></div>
        <?php endif; ?>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>