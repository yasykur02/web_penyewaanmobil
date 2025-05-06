<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Create an account</title>
</head>
<body>
    <div class="container">
        <h1>Create an account</h1>
        <p>Enter your email to Create account</p>
        <form action="#">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email@domain.com" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>

            <button type="submit">Create account with email</button>
        </form>
        <!-- <p><a href="register.html" class="account-link">Create an account</a></p> -->
        <p>By clicking continue, you agree to our <a href="#" class="terms-link">Terms of Service</a> and <a href="#" class="privacy-link">Privacy Policy</a>.</p>
    </div>
</body>
</html>