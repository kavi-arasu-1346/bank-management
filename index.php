<?php include("db.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Bank Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Customer Records</h2>
<div class="center">
    <a href="add.php" class="add-btn">➕ Add New Customer</a>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Account No</th>
        <th>Balance</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Branch</th>
        <th>Actions</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM customers");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['account_no']}</td>
            <td>₹ {$row['balance']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['branch']}</td>
            <td class='actions'>
                <a href='edit.php?account_no={$row['account_no']}' class='edit'>Edit</a>
                <a href='delete.php?account_no={$row['account_no']}' class='delete' onclick='return confirm(\"Are you sure?\")'>Delete</a>
            </td>
        </tr>";
    }
    ?>
</table>

</body>
</html>
