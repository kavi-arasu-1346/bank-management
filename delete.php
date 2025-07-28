<?php
include("db.php");

if (isset($_GET['account_no'])) {
    $account_no = $_GET['account_no'];

    // Perform DELETE query
    $sql = "DELETE FROM customers WHERE account_no='$account_no'";

    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error deleting customer: " . $conn->error;
    }
} else {
    echo "Account number not provided!";
}
?>
