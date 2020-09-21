<?php
  session_start();
  // date_default_timezone_set('UTC');

  $servername = "localhost";
  $db_username = "root";
  $db_password = "password";

  // Create connection
  $conn = mysqli_connect($servername, $db_username, $db_password, 'wbdforum');

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  // echo "Connected successfully";

  $stmt = $conn->prepare("INSERT INTO message (message, timestamp, username, id_parent) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("sssi", $message, $timestamp, $username, $id_parent);

  $message = $_POST['message'];
  $timestamp = date('Y-m-d H:i:s');
  $username = $_SESSION['username'];
  $id_parent = $_POST['post-id'];

  $stmt->execute();

  header('Location: ./forum.php');

?>

<html>
  <head>
    <?php include './components/head.php' ?>
  </head>
  <body>
  <div class="container">
    <div>Post creation successful!</div>
    <div><a href="forum.php">Go back to main page </a></div>
  </div>
  </body>
</html>