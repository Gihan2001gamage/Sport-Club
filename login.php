<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="pages.css">
</head>
<style>
body {
    background-image: url('background3.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
    color: #333;
}

.container {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px 25px;
    border-radius: 12px;
    max-width: 400px;
    width: 100%;
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
}

h1.form-title {
    font-size: 24px;
    color: #444;
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    font-size: 14px;
    color: #333;
    text-align: left;
    margin: 10px 0 5px;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 12px;
    margin-top: 5px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
    color: #333;
    outline: none;
    transition: border-color 0.3s ease;
}

input[type="email"]:focus, input[type="password"]:focus {
    border-color: #5e9cfc;
}

.btn {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 5px;
    background-color: #4b0082; /* Dark purple color */
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
}

.btn:hover {
    background-color: #3c0069;
}

.links {
    margin-top: 15px;
}

.links p {
    font-size: 14px;
    color: #666;
}

</style>
<body>
    <div class="container" id="login">
        <h1 class="form-title">Sign In</h1>
        <form action="log.php" method="POST">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email"><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password"><br>

            <button class="btn" type="button" onclick="window.location.href='admin.php'">Log In</button>
        </form>
        <div class="links">
            <p><b>Not Registered?</b></p>
            <button class="btn" type="button" onclick="window.location.href='register.php'">Sign Up</button>
        </div>
    </div>
</body>
</html>
