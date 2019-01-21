<nav class="nav">
    <ul>
        <?php
        if(!isset($_SESSION['login'])){
            ?>
            <a href="/">Home</a>
            <a href="/register">Register</a>
            <a href="/login">Login</a>
            <?php
        }elseif (isset($_SESSION['login'])){
            ?>
            <a href="/">Home</a>
            <a href="/users">User list</a>
            <a href="/logout">Logout</a>
            <?php
        }
        ?>
    </ul>
</nav>