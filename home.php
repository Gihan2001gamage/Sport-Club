<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y Sports - Home Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    box-sizing: border-box;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;
    background-color: #e9ecef;
}

.container {
    width: 100%;
    min-height: 100vh;
    padding: 20px 8%;
    background: linear-gradient(rgba(0, 123, 255, 0.5), rgba(0, 123, 255, 0.5)), url('background.jpg') center/cover;
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #fff;
    text-align: center;
}

nav {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 8%;
    background-color: rgba(0, 0, 0, 0.6);
    position: fixed;
    top: 0;
    z-index: 10;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
}

nav .logo {
    width: 120px;
    cursor: pointer;
}

nav .button {
    display: flex;
    gap: 15px;
}

nav .btn {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-weight: bold;
    font-size: 1rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

nav .btn:hover {
    background-color: #0056b3;
}

.content {
    margin-top: 15%;
    max-width: 700px;
}

.content h1 {
    font-size: 3rem;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
}

.content h4 {
    font-size: 1.5rem;
}

.additional-info {
    margin-top: 40px;
    font-size: 1.2rem;
}

.additional-info h2 {
    margin-bottom: 20px;
}

.additional-info p {
    margin-bottom: 10px;
}

.call-to-action {
    margin-top: 40px;
    padding: 10px 20px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: background 0.3s ease;
}

.call-to-action:hover {
    background-color: #218838;
}
.logo {
    
    font-size: 2rem;
    font-weight: bold;
    color: #FFD700;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    margin: 20px 0;
    letter-spacing: 2px;
}
</style>
<body>
    <div class="container">
        <nav>
            <h2 class=""logo>Y Sports</h2>
            <div class="button">
                <button class="btn" type="button" onclick="window.location.href='register.php'">Join Now</button>
                <button class="btn" type="button" onclick="window.location.href='login.php'">Member Login</button>
            </div>
        </nav>
        <div class="content">
            <h1>Welcome to</h1>
            <h1>Y Sports</h1>
            <h4>Your Premier Sports Club - Get Fit, Stay Active!</h4>
        </div>
        <div class="additional-info">
            <h2>About Us</h2>
            <p>At Y Sports, we offer a wide range of activities and facilities to help you achieve your fitness goals.</p>
            <p>Whether you’re into team sports, individual training, or group classes, we have something for everyone!</p>
            
            <h2>Available Sports</h2>
            <p>Join us for:</p>
            <ul style="list-style-type: none; padding: 0;">
                <li>Basketball</li>
                <li>Soccer</li>
                <li>Vollryball</li>
                <li>Swimming</li>
                <li>Cricket</li>
                <li>Fitness Training</li>
            </ul>
        </div>
        <button class="call-to-action" type="button" onclick="window.location.href='register.php'">Become a Member Today!</button>
    </div>
</body>
</html>
