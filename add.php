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

        require "conn.php";
        include "tmbl/header.php";
        $date = Date('Y/n/j');

        $title   = '';
        $author  = '';
        $content = '';

        if(isset($_POST['title']))
        {
            $title = $_POST['title'];
        }

        if(isset($_POST['author']))
        {
            $author = $_POST['author'];
        }

        if(isset($_POST['content']))
        {
            $content = $_POST['content'];
        }

        if(isset($_POST['post']))
        {
            mysqli_query($db_conn, "INSERT INTO posts(
                `title`, `author`, `content`, `date`
            ) VALUES(
                '$title', '$author', '$content', '$date'
            )");

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