<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>crud App</title>
</head>

<body>
    <h2>Add a New User</h2>
    <form action="create.php" method="post">
        <fieldset>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>
        </fieldset>
        <fieldset> <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </fieldset>
        <fieldset>
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" id="birthday" required>
        </fieldset>
        <fieldset>
            <label for="postal_code">Postal Code:</label>
            <input type="text" name="postal_code" id="postal_code" required>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" required>
        </fieldset>
        <fieldset>
            <label for="street">Street:</label>
            <input type="text" name="street" id="street" required>
        </fieldset>
        <fieldset>
            <label for="house_number">House Number:</label>
            <input type="text" name="house_number" id="house_number" required>
        </fieldset>
        <button type="submit">Add User</button>
    </form>
</body>

</html>