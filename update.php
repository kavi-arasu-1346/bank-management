<?php
include("db.php");

if (isset($_POST['update'])) {
    $account_no = $_POST['account_no'];
    $name = $_POST['name'];
    $balance = $_POST['balance'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $branch = $_POST['branch'];

    $sql = "UPDATE customers SET 
            name='$name', 
            balance=$balance,
            email='$email',
            phone='$phone',
            branch='$branch'
            WHERE account_no='$account_no'";

    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Update failed: " . $conn->error;
    }
}
?>
