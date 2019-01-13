$(document).ready(function(){
    var baseURL = location.host;
    var postURL = "postComment.php";
    var readURL = "loadComments.php";
    var deleteURL = "deleteComment.php"

    loadComments();

    $("button#submitComment").click(function() {
        $.post(postURL, $("#entry").serialize());
        $("#entry").val("");
        loadComments();

    });


    function loadComments() {
        $.getJSON(readURL, function (comments) {
            $("#comments").html("");
            console.log(comments.length);
            for (var i = 0; i < comments.length; i++) {
                console.log(comments[i]);
                loadComment(comments[i]);
            }
        });
    }

    function loadComment(comment) {
        $("<div class='comment'><p>" + removeQuotes(comment.author) + " " + removeQuotes(comment.posttime) +"</p><p>" + removeQuotes(comment.content) + "</p></div>").appendTo($("#comments"));
        if(removeQuotes(comment.author) === getUsername()){
            var deleteParagraph = $("<p class='delete'></p>");
            $("<input type='hidden' name='commentID' value='"+ removeQuotes(comment.ID) +"'><button>Delete</button>").click(deleteComment).appendTo(deleteParagraph);
            //$("<button>Delete</button>").click(deleteComment).appendTo(deleteParagraph);
            $(deleteParagraph).appendTo($("#comments"));
        }
    }

    function getUsername(){
        var element = document.getElementById("username");
        if(element != null){
            return element.value;
        }
        return null;
    }


    function removeQuotes(str) {
        return str.replace(/\"/g, "");
    }

    function deleteComment(){
        $.post(deleteURL, $(this).siblings("input").serialize());
        loadComments();
    }


});