<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign In</title>
</head>
<body>
    <div class="container">
        <h1>Sign in to your account</h1>
        <p>Enter your email to sign in for this app</p>
        <form action="proses_login.php" method="post">
            <label for="email">Email</label>
            <input type="text" id="" name="username" placeholder="email@domain.com" required>

            <label for="password">Password</label>
            <input type="password" id="" name="password" placeholder="Password" required>

            <button type="submit" value="Login" >Sign in with email</button>
        </form>
        <p><a href="register.php" class="account-link">Create an account</a></p>
        <p>By clicking continue, you agree to our <a href="#" class="terms-link">Terms of Service</a> and <a href="#" class="privacy-link">Privacy Policy</a>.</p>
    </div>
</body>
</html>
