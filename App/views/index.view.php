<?php require('partials/head.php') ?>

    <h1>Home Page</h1>

    <?php

        if(isset($_SESSION['login'])){
            echo "<b><em>Welcome</em></b> " . $_SESSION['login'];
        }

    ?>

<?php require('partials/footer.php') ?>