<?php
include 'includes/header.php';
include 'includes/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->execute(['id' => $id]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $price = filter_input(INPUT_POST, 'price', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $sql = "UPDATE products SET name = :name, price = :price WHERE id = :id";
    $stmt = $conn->prepare($sql);

    if ($stmt->execute(['name' => $name, 'price' => $price, 'id' => $id])) {
        echo "<p>Produk berhasil diperbarui.</p>";
    } else {
        echo "<p>Gagal memperbarui produk.</p>";
    }
}
?>

<form method="post" action="edit-product.php?id=<?= $id ?>">
    <h2>Edit Produk</h2>
    <label>Nama Produk: <input type="text" name="name" value="<?= htmlspecialchars($product['name']); ?>" required></label><br>
    <label>Harga Produk: <input type="number" name="price" value="<?= $product['price']; ?>" step="0.01" required></label><br>
    <button type="submit">Perbarui</button>
</form>

<?php include 'includes/footer.php'; ?>