<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me | Tim Platzer</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<header>
    <a href="./index.html">
        <img src="./img/logo.png" alt="Logo">
    </a>
    <nav>
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./portfolio/index.html">Portfolio</a></li>
            <li><a href="./about.html">About</a></li>
            <li><a href="./contact.php">Contact</a></li>
        </ul>
    </nav>
    <div class="header-login">
        <a href="./forms/login.html">Login</a>
    </div>
</header>

<section id="contact-form">
    <h2>Contact Me</h2>
    <p>Feel free to reach out using the form below:</p>

    <form action="./php/form_process.php" method="post">
        <label for="name">First Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
</section>


<footer>
    <p><a href="./imprint.html">Impressum</a></p>
    <p>&copy; 2023 Tim Platzer. All rights reserved.</p>
</footer>

<script src="./js/common.js"></script>
</body>

</html>
