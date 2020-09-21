<?php 
function create_post($id, $username, $timestamp, $message, $comments, $count) {
  return '<div class="card shadow-sm my-2">
    <div class="card-body">
      <div class="card-title d-flex justify-content-between">
        <h3>'.$username.'</h3>
        <small class="font-italic text-muted">'.$timestamp.'</small>
      </div>
      <p class="card-text">
        '.$message.'
      </p>
      <a href="#comments-'.$id.'" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">View comments ('.$count.')</a>
      <div class="collapse" id="comments-'.$id.'">
        '.$comments.'
      </div>
      <form class="d-flex mt-4" method="POST" action="create_comment.php">
        <input class="form-control mr-1" name="message" type="text" placeholder="Write a comment...">
        <input type="hidden" name="post-id" value="'.$id.'">
        <button class="btn btn-primary ml-1" type="submit">Comment</button>
      </form>
    </div>
  </div>';
}
?>