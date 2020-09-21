<?php
  session_start();
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Basic PHP Based Forum</a>
    <div class="d-flex justify-content-end align-items-center">
      <div class="p-2">Logged in as <?php echo $_SESSION['username']?></div>
      <div class="p-2">
        <form class="p-0 m-0" action="logout.php">
          <button class="btn btn-secondary" type>Logout</button>
        </form>     
      </div>
    </div>
  </div>
</nav>