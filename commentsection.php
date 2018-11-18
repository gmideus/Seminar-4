
<div class="content">
    <h3>
        Comments
    </h3>
    <?php
    session_start();
    require_once 'Comment.php';
    require_once 'keys.php';
    if(isset($_SESSION[USERNAME])) {
        echo("<form action = 'postComment.php' method = 'post' >
        <textarea id = 'content' rows = 5 name = 'content' placeholder = 'Write your Comment here.' ></textarea >
        <input type = 'submit' value = 'Send' />
        </form >");
    } else {
        echo("<p>Please <a href='loginpage.php'>sign in</a> to leave a comment</p>");
    }


        $filename = __DIR__ . '/'.$selected.'comments';
        $comments = explode(";\n", file_get_contents($filename));
        for ($i = count($comments) - 1; $i >= 0; $i--) {
            $comment = unserialize($comments[$i]);
            if($comment instanceof Comment && ! $comment->deleted()) {
                echo("<div class='comment'><p>" . $comment->getAuthor() . " " . $comment->getDate() ."</p>");
                if($_SESSION[USERNAME] == $comment->getAuthor()){
                    echo("<form action='deleteComment.php' method='post'><input type='hidden' id='commentID' name='commentID' value=".$comment->getID()."><input type = 'submit' value = 'Delete' /></form>");
                }
                echo("<p>" . $comment->getContent() . "</p></div>");

            }
        }
    ?>

</div>