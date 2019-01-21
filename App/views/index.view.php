<?php require('partials/head.php') ?>

    <h1><em>Welcome</em></h1>

    <?php

        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
        }

    ?>

<?php require('partials/footer.php') ?>