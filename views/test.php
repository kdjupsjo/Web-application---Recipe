<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Test file</title>
        <link rel="stylesheet" type="text/css" href='../../resources/css/commentcss.css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../../resources/js/script.js"></script>
    </head>
    <body>
        <h1> This is a a test file </h1> 
     
     <?php 
    use MyApp\Integration\CommentDAO;
    $connection = new CommentDAO;
    $allComments = $connection->allComments(); 
    ?>
    
    <div class='comment-block' >
        <?php foreach ($allComments as $comment) { ?>
        <div class='comment-item'>
            <h3><?php echo $comment->getName().': '; ?></h3>
            <p><?php echo $comment->getComment().'</br>'; ?></p>
        </div>
        <?php 
        }

        ?>
        <div class="new-comment">
            <h3></h3>
            <p></p>
        </div>
    </div>
        
        
        
        <form id="form" method="post" action="Viewmodel">

        <label>
            <span>Name *</span>
            <input type="text" name="name" id="name" placeholder="Your name here...." required>
        </label>

        <label>
            <span>Your comment *</span>
            </br>
            <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Type your comment here...." required></textarea>
        </label>

        <input type="submit" id="submit" value="Submit Comment">
    </form>
      
    </body>
</html>
