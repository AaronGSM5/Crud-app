<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud App</title>
</head>
<body>
    <h2>Add a New User</h2>
    <form action="create.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Add User</button>
    </form>
</body>
</html>