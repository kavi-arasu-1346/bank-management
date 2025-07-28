<?php
include("db.php");

$name = $_POST['name'];
$account_no = $_POST['account_no'];
$balance = $_POST['balance'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$branch = $_POST['branch'];

$sql = "INSERT INTO customers (name, account_no, balance, email, phone, branch)
        VALUES ('$name', '$account_no', $balance, '$email', '$phone', '$branch')";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Insert failed: " . $conn->error;
}
?>
