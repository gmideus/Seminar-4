
<div class="content">
    <h3>
        Comments
    </h3>
    <?php
    if(isset($_SESSION[USERNAME])) {
        echo("<form action = 'postComment.php' method = 'post' >
        <textarea id = 'content' rows = 5 name = 'content' placeholder = 'Write your Comment here.' ></textarea >
        <input type = 'submit' value = 'Send' />
        </form >");
    } else {
        echo("<p>Please <a href='index.php?page=loginpage'>sign in</a> to leave a comment</p>");
    }

    foreach($contr->getComments($_SESSION[PAGE]) as $comment){
        echo("<div class='comment'><p>" . $comment->getAuthor() . " " . $comment->getPosttime() ."</p>");
        if($_SESSION[USERNAME] == $comment->getAuthor()){
            echo("<form action='deleteComment.php' method='post'><input type='hidden' id='commentID' name='commentID' value=".$comment->getID()."><input type = 'submit' value = 'Delete' /></form>");
        }
        echo("<p>" . $comment->getContent() . "</p></div>");
    }
    ?>

</div>