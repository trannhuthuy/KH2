<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
    <div class="box">
        <form action="login.php" method="post">
            <h2>Login</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <label>User Name</label>
            <input type="text" name="uname" placeholder="User Name">

            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            <button type="submit">Login</button>
                <a href="signup.php" class="ca">Create an account</a>
        </form>
    </div>
</body>
</html>