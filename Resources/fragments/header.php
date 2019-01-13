<div  class="header">
<h1>
    <a href="index.php">Tasty Recipes</a>
</h1>
<div class="login">
    <?php
    if(isset($_SESSION[USERNAME])){
        echo("<p>User: " . $_SESSION[USERNAME] . " <a class='logout' id='logout'>Sign out</a><input type='hidden' id='page' value=".$_SESSION[PAGE]."></p>");
    } else {
        echo("<a href ='index.php?page=loginpage'>Sign in</a>");
    }

    ?>

</div>
</div>
