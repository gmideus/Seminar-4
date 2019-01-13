<div class="content">
    <h2>
        Log in
    </h2>

                <label for="userName">Username:</label>
                <input type="text" id="userName" name='userName' class='text-author'/>
                <label for="password">Password:</label>
                <input type="password" id="password" name='password' class='text-author'/>
    <button id='login'>Sign in</button>
    <?php
    echo("<input type='hidden' id='page' value=".$_SESSION[PAGE].">");
    if(isset($_SESSION[LOGIN_ERROR])){
        echo("<p>".$_SESSION[LOGIN_ERROR]. "</p>");
    }
    ?>

</div>