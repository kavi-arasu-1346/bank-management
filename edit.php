<?php
include("db.php");

if (!isset($_GET['account_no'])) {
    echo "Account number missing!";
    exit;
}

$account_no = $_GET['account_no'];
$result = $conn->query("SELECT * FROM customers WHERE account_no = '$account_no'");
if ($result->num_rows != 1) {
    echo "Customer not found.";
    exit;
}
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Edit Customer</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="account_no" value="<?= htmlspecialchars($row['account_no']) ?>">

        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required>

        <label>Balance:</label>
        <input type="number" name="balance" step="0.01" value="<?= $row['balance'] ?>" required>

        <label>Email:</label>
        <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>">

        <label>Phone:</label>
        <input type="text" name="phone" value="<?= htmlspecialchars($row['phone']) ?>">

        <label>Branch:</label>
        <input type="text" name="branch" value="<?= htmlspecialchars($row['branch']) ?>">

        <input type="submit" name="update" value="Update Customer">
    </form>
</div>

</body>
</html>
