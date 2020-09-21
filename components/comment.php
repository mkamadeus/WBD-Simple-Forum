<?php
function create_comment($username, $timestamp, $message) {
  return '<div class="d-flex flex-column shadow-sm card my-2">
    <div class="card-body">
      <div class="card-title d-flex justify-content-between">
        <h5>'.$username.' commented:</h5>
        <small class="font-italic text-muted">'.$timestamp.'</small>
      </div>
      <p class="card-text">
        '.$message.'
      </p>
    </div>
  </div>';
}
?>