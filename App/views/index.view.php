<?php require('partials/head.php') ?>

    <em><h1>Welcome</h1></em>

    <?php

        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
        }

    ?>

<?php require('partials/footer.php') ?>