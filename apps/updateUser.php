<?php
// Check if the user ID is provided in the query string
if (isset($_GET['id'])) {
    $userId = $_GET['id'];

    // Retrieve the user data from the database or any other storage mechanism
    $user = [
        'id' => $userId,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        // Add more user data fields as needed
    ];

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process the form data and update the user
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Update the user data in the database or any other storage mechanism

        // Redirect to the user list page after successful update
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <!-- CSS styles and other HTML code for the update user page -->
</head>
<body>
    <div class="container">
        <h2>Update User</h2>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">

            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="<?php echo $user['name']; ?>" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo $user['email']; ?>" required>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
