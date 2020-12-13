<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/add.css">
    <title>Add post</title>
</head>
<body>
    <?php

        //Include files in the page
        require "conn.php";
        include "tmbl/header.php";

        //Set date value
        $date = Date('Y/n/j');

        //Variables
        $title   = '';
        $author  = '';
        $content = '';

        //Set title
        if(isset($_POST['title']))
        {
            $title = $_POST['title'];
        }

        //Set author name
        if(isset($_POST['author']))
        {
            $author = $_POST['author'];
        }

        //Set content
        if(isset($_POST['content']))
        {
            $content = $_POST['content'];
        }

        //Button Click and send data
        if(isset($_POST['post']))
        {
            //Send data to database
            mysqli_query($db_conn, "INSERT INTO posts(
                `title`, `author`, `content`, `date`
            ) VALUES(
                '$title', '$author', '$content', '$date'
            )");

            //Set header location at index.php
            header('location: index.php');
        }

    ?>

   
    <div class="add-container">
        <form action="" method="POST" class="add">
            <h1>Add Post</h1>
            <input type="text" class="title" placeholder="Title" name="title" required>
            <input type="text" class="author" placeholder="Auhtor" name="author" required>
            <textarea class="content" rows="5" placeholder="Post Content" name="content" required></textarea>
            <input type="submit" class="post" value="Post" name="post">
        </form>
    </div>    

</body>
</html>
