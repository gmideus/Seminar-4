<div  class="header">
<h1>
    <a href="index.php">Tasty Recipes</a>
</h1>
<div class="login">
    <?php
    require_once 'keys.php';
    session_start();
    if(isset($_SESSION[USERNAME])){
        echo("<p>User: " . $_SESSION[USERNAME] . " <a href='logout.php'>Sign out</a></p>");
    } else {
        echo("<a href ='loginpage.php'>Sign in</a>");
    }

    ?>

</div>
</div>
