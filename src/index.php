<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud App</title>
    <link rel="stylesheet" href="./style/index.css">
</head>

<body>
    <form action="create.php" method="post">
        <h2>Add a New User</h2>
        <div class="form-grid">
            <fieldset>
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" required>
            </fieldset>

            <fieldset>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </fieldset>

            <fieldset class="full-width">
                <label for="birthday">Birthday</label>
                <input type="date" name="birthday" id="birthday" required>
            </fieldset>

            <fieldset class="full-width">
                <label for="street">Street & House Number</label>
                <div style="display: flex; gap: 1rem;">
                    <input type="text" name="street" id="street" placeholder="Street Name" required style="flex-grow: 3;">
                    <input type="text" name="house_number" id="house_number" placeholder="No." required style="flex-grow: 1;">
                </div>
            </fieldset>

            <fieldset>
                <label for="postal_code">Postal Code:</label>
                <input type="text" name="postal_code" id="postal_code" required>
            </fieldset>

            <fieldset>
                <label for="city">City:</label>
                <input type="text" name="city" id="city" required>
            </fieldset>
        </div>

        <button type="submit">Add User</button>
    </form>
</body>

</html>