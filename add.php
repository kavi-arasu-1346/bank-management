<!DOCTYPE html>
<html>
<head>
    <title>Add Customer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">
    <h2>Add New Customer</h2>
    <form action="insert.php" method="post">
        <label>Name:</label>
        <input type="text" name="name" required>

        <label>Account No:</label>
        <input type="text" name="account_no" required>

        <label>Balance:</label>
        <input type="number" name="balance" step="0.01" required>

        <label>Email:</label>
        <input type="email" name="email">

        <label>Phone:</label>
        <input type="text" name="phone">

        <label>Branch:</label>
        <input type="text" name="branch">

        <input type="submit" value="Add Customer">
    </form>
</div>

</body>
</html>
