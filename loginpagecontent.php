<div class="content">
    <h2>
        Log in
    </h2>
    <form action="login.php" method='post'>
                <label for="userName">Username:</label>
                <input type="text" id="userName" name='userName' class='text-author'/>
                <label for="password">Password:</label>
                <input type="password" id="password" name='password' class='text-author'/>
        <input type="submit" value="Log in"/>
    </form>
    <?php
    require_once 'keys.php';
    session_start();
    if(isset($_SESSION[LOGIN_ERROR])){
        echo("<p>".$_SESSION[LOGIN_ERROR]. "</p>");
    }
    ?>

</div>