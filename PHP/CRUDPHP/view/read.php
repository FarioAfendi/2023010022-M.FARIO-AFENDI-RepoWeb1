<!-- Header -->
<?php include '../header.php'; ?>

<h1 class="text-center">User Details</h1>
<div class="container">
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Checking if the 'user_id' parameter is set
            if (isset($_GET['user_id'])) {
                $userid = $_GET['user_id'];

                // SQL query to fetch the user details based on ID
                $query = "SELECT * FROM users WHERE ID = {$userid}";
                $view_users = mysqli_query($conn, $query);

                // Handling query execution errors
                if (!$view_users) {
                    echo "<tr><td colspan='4' class='text-center text-danger'>Failed to fetch user details: " . mysqli_error($conn) . "</td></tr>";
                } else {
                    while ($row = mysqli_fetch_assoc($view_users)) {
                        $id = $row['ID'];
                        $user = $row['username'];
                        $email = $row['email'];
                        $pass = $row['password'];
                        echo "<tr>";
                        echo "<td>{$id}</td>";
                        echo "<td>{$user}</td>";
                        echo "<td>{$email}</td>";
                        echo "<td>{$pass}</td>";
                        echo "</tr>";
                    }
                }
            } else {
                echo "<tr><td colspan='4' class='text-center'>No user ID provided!</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<!-- Back button to go to the previous page -->
<div class="container text-center mt-5">
    <a href="home.php" class="btn btn-warning mt-5">Back</a>
</div>

<!-- Footer -->
<?php include '../footer.php'; ?>