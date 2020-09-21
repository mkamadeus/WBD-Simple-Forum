<?php 
  // include './helpers/create_post.php';
  session_start();

  if($_SESSION['username'] == '') {
    // Hardcoded usernames
    if($_POST['username'] !='mkamadeus' && $_POST['username'] != 'pisangman'){ 
      header('Location: ./index.php');
      $_SESSION['status'] = 'invalid';
      return;
    }
    
    $_SESSION['status'] = '';
    $_SESSION['username'] = $_POST['username'];
  }
  $servername = "localhost";
  $db_username = "root";
  $db_password = "password";

  // Create connection
  $conn = mysqli_connect($servername, $db_username, $db_password, 'wbdforum', 3306);

?>

<html>
  <head>
    <?php include './components/head.php' ?>
  </head>
  <body>
    <?php
      include './components/navbar.php';
    ?>
    <div class="container">
      <form class="d-flex my-3" action="create_post.php" method="post">
        <div class="row g-3">
        <div class="col-12 col-md-8">
          <input type="text" class="form-control" placeholder="Write a new post..." name="message">
        </div>  
        <div class="col-12 col-md-4">
          <button class="btn btn-primary btn-block" type="submit">Post</button>
        </div>  
      </div>
      </form>
      <?php
        include('./components/post.php');
        include('./components/comment.php');

        $sql_post = 'SELECT * FROM message WHERE id_parent IS NULL ORDER BY id DESC ';
        $posts = mysqli_query($conn, $sql_post);
        
        echo '<div class="">';
        if (mysqli_num_rows($posts) > 0) {
          while($post = mysqli_fetch_assoc($posts)) {
            $sql_comment = 'SELECT * FROM message WHERE id_parent = '.$post["id"];
            $comments = mysqli_query($conn, $sql_comment);
            
            $dom_comments = '';
            if(mysqli_num_rows($comments) > 0) {
              while($comment = mysqli_fetch_assoc($comments)) {
                $dom_comments .= create_comment($comment['username'], $comment['timestamp'], $comment['message']);
              }
            }

            echo create_post($post["id"], $post["username"], $post["timestamp"], $post["message"], $dom_comments, mysqli_num_rows($comments));
          }
        }
        echo "</div>";
      ?>
    </div>
  </body>
</html>