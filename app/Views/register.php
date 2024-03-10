<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .register-container {
            width: 300px;
            margin: 0 auto;
            margin-top: 50px;
        }
        .register-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .register-container button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form action="/login/process_register" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        <button type="submit">Register</button>
        <!-- app/Views/register.php -->

<!-- Your existing registration form or content -->

<!-- Add a link or form to go to the login page -->
<a href="<?= site_url('/register/login') ?>">Login</a>
<!-- or, if you prefer a form submission -->
<!-- <form action="<?= site_url('/register/login') ?>" method="get">
    <button type="submit">Login</button>
</form> -->

    </form>
</div>

</body>
</html>
