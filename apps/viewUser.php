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
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View User</title>
    <!-- CSS styles and other HTML code for the view user page -->
</head>
<body>
    <div class="container">
        <h2>View User</h2>
        <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
        <!-- Display more user data fields as needed -->
    </div>
</body>
</html>
