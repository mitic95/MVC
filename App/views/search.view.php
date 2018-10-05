<?php require('partials/head.php') ?>

    <div class="header">
        <a href="/">HOME PAGE</a>
    </div>

    <h1>All Results:</h1>

<?php foreach($users as $user) : ?>

    <?php echo "User Email:". PHP_EOL . "<b><em>" . $user->email . "</em></b>"; ?>
    <br> <br>

<?php endforeach; ?>

<?php require('partials/footer.php') ?>