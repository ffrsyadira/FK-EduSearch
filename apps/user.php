<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <!-- CSS styles and other HTML code for the login form -->
</head>
<body>
    <div class="container">
        <h2>User Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <!-- Username and password fields -->
            <input type="text" id="username" name="username" required>
            <input type="password" id="password" name="password" required>

            <!-- Login button -->

            <?php if (isset($loginError)): ?>
                <div class="error"><?php echo $loginError; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>
