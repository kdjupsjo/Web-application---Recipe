<?php

use MyApp\Integration\CommentDAO;

if (isset( $_SERVER['HTTP_X_REQUESTED_WITH'] )):
    
    $connection = new CommentDAO;

    
    $name = mysqli_real_escape_string($_POST['name']);
    $comment = mysqli_real_escape_string($_POST['comment']);
    $connection->insertComment('funktion', 'funkar funktionen');
    $connection->insertComment($name, $comment);

    
?>

<div class="comment-item">
    <div class="comment-post">
        <h3><?php echo $name ?> <span>said....</span></h3>
        <p><?php echo $comment?></p>
    </div>
</div>

<?php

endif;

?>