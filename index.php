<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php

        //Include files in the page 
        require "conn.php";
        include "./tmbl/header.php";
    
        //Select posts from database
        $selectposts = mysqli_query($db_conn, "SELECT * FROM posts");

        
    ?>

    <div class="posts-container">
        <div class="posts">
            <?php
                while($fetcshposts = mysqli_fetch_array($selectposts))
                {
                    echo'
                        <div class="post">
                            <h2 class="post-title">'. $fetcshposts['title'] .'</h2>
                            <span class="post-date">'. $fetcshposts['date'] .'</span>
                            <p class="post-content">'. $fetcshposts['content'] .'</p>
                            <span class="post-author">'. $fetcshposts['author'] .'</span>
                        </div>
                    ';
                }
                
            ?>
        </div>
    </div>
    


</body>
</html>
