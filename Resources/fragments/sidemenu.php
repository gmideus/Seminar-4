<div class="sidebar">
    <ul class="menu">
        <li><a class="<?php if ($selected == "home") echo 'active'; ?>" href="index.php">Home</a></li>
        <li><a class="<?php if ($selected == "calendar") echo 'active'; ?>" href="index.php?page=calendar">Calendar</a></li>
    </ul>

    <ul class="recipes">
        <li><b><strong>Recipes:</strong></b></li>
        <li><a class="<?php if ($selected == "meatballs") echo 'active'; ?>" href="index.php?page=meatballs">Meatballs</a></li>
        <li><a class="<?php if ($selected == "pancakes") echo 'active'; ?>" href="index.php?page=pancakes">Pancakes</a></li>
    </ul>
    <div class="sideimage">
        <img src="Resources/images/JESUS.gif" alt="Communicating through Jesus"/>
    </div>
</div>