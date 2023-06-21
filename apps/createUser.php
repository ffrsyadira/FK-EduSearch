<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process the form data and create a new user
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Insert the user data into the database or any other storage mechanism

    // Redirect to the user list page after successful creation
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <!-- CSS styles and other HTML code for the create user page -->
</head>
<body>
    <div class="container">
        <h2>Create User</h2>
        <form method="POST" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <button type="submit">Create</button>
        </form>
    </div>
</body>
</html>
