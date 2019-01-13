$(document).ready(function(){
    var loginURL = "login.php";
    var logoutURL = "logout.php";

    $("button#login").click(function () {
        $.post(loginURL, $("#userName, #password").serialize());
        var element = document.getElementById("page");
        window.location.replace("index.php?page=" + element.value);

    })

    $("#logout").click(function(){
        $.post(logoutURL);
        var element = document.getElementById("page");
        window.location.replace("index.php?page=" + element.value);
    });

});