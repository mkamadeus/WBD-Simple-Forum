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

  $stmt = $conn->prepare("INSERT INTO message (message, timestamp, username) VALUES (?, ?, ?)");
  $stmt->bind_param("sss", $message, $timestamp, $username);

  $message = $_POST['message'];
  $timestamp = date('Y-m-d H:i:s');
  $username = $_SESSION['username'];

  echo $message;
  echo $username;
  echo $timestamp;
  
  $stmt->execute();
  
  echo 'pisang';
  header('Location: ./forum.php');

?>