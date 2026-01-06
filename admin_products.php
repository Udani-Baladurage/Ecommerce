<?php
session_start();

// 1️⃣ Only allow admins
if(!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin'){
    header("Location: index.php");
    exit();
}

// 2️⃣ Connect to DB
$conn = new mysqli("localhost", "root", "", "ecommerce_db");
if($conn->connect_error) die("DB Connection Error");

// 3️⃣ Handle delete request
if(isset($_GET['delete_id'])){
    $id = intval($_GET['delete_id']);
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: admin_products.php");
    exit();
}

// 4️⃣ Handle edit form submission
if(isset($_POST['edit_product'])){
    $id = intval($_POST['id']);
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    
    // Optional: handle new image
    if(!empty($_FILES['image']['name'])){
        $image = 'images/'.basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
        $conn->query("UPDATE products SET name='$name', category='$category', price='$price', stock='$stock', description='$description', image='$image' WHERE id=$id");
    } else {
        $conn->query("UPDATE products SET name='$name', category='$category', price='$price', stock='$stock', description='$description' WHERE id=$id");
    }

    header("Location: admin_products.php");
    exit();
}

// 5️⃣ Handle add product form submission
if(isset($_POST['add_product'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $description = $_POST['description'];
    
    $image = 'images/'.basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $image);

    $stmt = $conn->prepare("INSERT INTO products (name, category, price, stock, description, image) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiss", $name, $category, $price, $stock, $description, $image);
    $stmt->execute();
    $stmt->close();

    header("Location: admin_products.php");
    exit();
}

// 6️⃣ Fetch all products
$products = $conn->query("SELECT * FROM products ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – products| PINKORA</title>
    <link rel="stylesheet" href="style.css">
     <link rel="stylesheet" href="admin_products.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.7.0/fonts/remixicon.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>


<!-- NAVBAR -->
<nav class="navbar">
    <div class="logo">PINKORA</div>

    <!-- CENTER MENU -->
    <ul class="nav-center">
        <li><a href="admin_dashboard.php">Dashboard</a></li>
        <li><a href="orders_admin.php">Orders</a></li>
        <li><a href="admin_products.php">Products</a></li>
        <li><a href="admin_users.php">Users</a></li>
        
    </ul>


     <!-- RIGHT MENU -->
    <ul class="nav-right">
        <li>
            <a href="#">
                <i class="ri-user-3-line"></i>
                Welcome, <?= htmlspecialchars($_SESSION['name']) ?>
            </a>
        </li>
        <li>
            <a href="logout.php">
                <i class="ri-logout-box-line"></i> Logout
            </a>
        </li>
    </ul>
</nav>


<div class="admin-container">
<h2>Add New Product</h2>
<form method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="text" name="category" placeholder="Category">
    <input type="number" step="500" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="file" name="image" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit" name="add_product">Add Product</button>
</form>

<!-- Existing Products Table -->
<h2>All Products</h2>
<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Stock</th>
    <th>Image</th>
    <th>Description</th>
    <th>Actions</th>
</tr>

<?php while($row = $products->fetch_assoc()){ ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td><?= htmlspecialchars($row['category']) ?></td>
    <td><?= $row['price'] ?></td>
    <td><?= $row['stock'] ?></td>
    <td><img src="<?= $row['image'] ?>"></td>
    <td><?= htmlspecialchars($row['description']) ?></td>
    <td>
        <a href="admin_products.php?edit_id=<?= $row['id'] ?>">Edit</a> |
        <a href="admin_products.php?delete_id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
</div>>

<!-- Optional: Edit Form -->
<?php
if(isset($_GET['edit_id'])){
    $edit_id = intval($_GET['edit_id']);
    $edit_product = $conn->query("SELECT * FROM products WHERE id=$edit_id")->fetch_assoc();
?>
<h2>Edit Product #<?= $edit_product['id'] ?></h2>
<form method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $edit_product['id'] ?>">
    <input type="text" name="name" value="<?= htmlspecialchars($edit_product['name']) ?>" required>
    <input type="text" name="category" value="<?= htmlspecialchars($edit_product['category']) ?>">
    <input type="number" step="0.01" name="price" value="<?= $edit_product['price'] ?>" required>
    <input type="number" name="stock" value="<?= $edit_product['stock'] ?>" required>
    <input type="file" name="image">
    <textarea name="description"><?= htmlspecialchars($edit_product['description']) ?></textarea>
    <button type="submit" name="edit_product">Save Changes</button>
</form>
<?php } ?>

</body>
</html>
