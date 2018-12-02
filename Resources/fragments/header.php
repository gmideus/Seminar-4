<div  class="header">
<h1>
    <a href="index.php">Tasty Recipes</a>
</h1>
<div class="login">
    <?php
    if(isset($_SESSION[USERNAME])){
        echo("<p>User: " . $_SESSION[USERNAME] . " <a href='logout.php'>Sign out</a></p>");
    } else {
        echo("<a href ='index.php?page=loginpage'>Sign in</a>");
    }

    ?>

</div>
</div>
