<?php
session_start();
if(isset($_SESSION['login'])){
    header('Location: /');
}
?>

<?php require('partials/head.php') ?>

    <body>

    <div class="header">
        <a href="/">HOME PAGE</a>
    </div>

    <h1>Login Page</h1>

    <form action="/login" method="post">
        <input type="text" placeholder="Enter your email" name="email" required>
        <input type="password" placeholder="Enter your password" name="pass" required>

        <input type="submit" name="submit">
    </form>

    </body>

<?php require('partials/footer.php') ?>