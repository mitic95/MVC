<?php require('partials/head.php') ?>

    <div class="header">
        <a href="/">HOME PAGE</a>
    </div>

    <h1>All Users:</h1>

<div class="search">
    <form action="/search" method="post">
        <input type="text" name="search" placeholder="Search users...">
        <input type="submit" name="submit" value="Search">
    </form>
</div>

<?php foreach($users as $user) : ?>

    <?php echo "User Email:". PHP_EOL . "<b><em>" . $user->email . "</em></b>"; ?>
    <br> <br>

<?php endforeach; ?>

<?php require('partials/footer.php') ?>