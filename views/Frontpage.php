<!DOCTYPE html>
<html>
<head>
	<title>Frontpage</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../../resources/css/login.css">
	<link rel="stylesheet" type="text/css" href="../../resources/css/recipe.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="../../resources/js/script.js"></script>
</head>

<body>
    <div class = "backgroundimg" ></div> 
    <div class = "recipebody" >
        <img class="logo" src="../../resources/images/logo.png" alt ="Error loading picture">
        <div class="recipe">
            <div class="suggested">
                <ul>
                   <a href="calendar.html">
                    <li>
                      <img src="../../resources/images/calendar.png" />
                      <h3>Food Calendar</h3>
                      <p>Check out the food calendar that will guide you to eat healthy, cheap and substainable for a month.</p>
                          </li>
                    </a>

                    <li>
                      <img src="../../resources/images/pancakes.jpg" />
                      <h3>Delicious Pancakes</h3>
                      <p>Learn how to do delicous pancakes that don't take forever to cook.</p>
                    </li>

                    <li>
                      <img src="../../resources/images/Meatball.jpg" />
                      <h3>Swedish Meatballs</h3>
                      <p>Mastering the classic swedish meal isn't that hard. Let us help you!</p>
                    </li>

                    <li>
                      <img src="../../resources/images/recipe.jpg" />
                      <h3>More Recipes</h3>
                      <p>You want more? No worries. Click here.</p>
                </li>
                </ul>
        </div>
        <div class="commentsection">
                
            <form class="commentfront" id="form" method="post" action="Viewmodel">
 
                <textarea name="comment" id="comment" placeholder="Type your comment here...." required></textarea>
                
                <?php 
                $loggedIn = $this->session->get(MyApp\Util\Constants::USER_NAME);
                if(strlen($loggedIn) != 0 ) { ?>
                    <input type="hidden" id = 'name' name="name" value="<?php echo $loggedIn;?>" >
                    <input type='submit' id= "submit" name='commentSubmit' value='Comment as <?php echo $loggedIn ?>'>
                    <input id='tabort' type='submit' name='deleteComment' value='Delete Comments'> 
                <?php } ?>
                
            </form>

            <div class="comment-commentsection">
                <?php
                use MyApp\Integration\CommentDAO;
                $connection = new CommentDAO;
                $allComments = $connection->allComments(); 

                foreach ($allComments as $element){ ?>
                <div class='showcomment'><h4>
                    <?php echo $element->getName(); ?></h4><p>
                    <?php echo $element->getComment(); ?>
                    </p></div>
                <?php } ?>
            
                </div>
            </div>
        </div>
    </div>
    </div>
</body>
</html>
