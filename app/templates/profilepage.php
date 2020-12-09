<?php include 'inc/header.php'; ?>

<h4>Hello <?php echo $username; ?>!</h4>
<br>

<?php
if(!$is_subscribed) {
  require_once 'inc/subscribebutton.php';
}
?>

<ul class="nav nav-pills">
<a class="btn btn-success col-md-4 mr-2" href="postcreate.php" role="button">Create Post</a>
<a class="btn btn-primary col-md-4 mr-2" href="updatepassword.php" role="button">Update Password</a>
</ul>
<br>

<?php
  if($is_admin && $pendingposts) {
    require_once 'inc/pendingjobs.php';
  } 
?>

<div class="container">
  <!-- All Job Posts created by the user -->
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <h2 class="text-center">Jobs Created</h2>
        <table class="table table-striped">
          <thead>
            <th>Title</th>
            <th>Date</th>
            <th>Details</th>
          </thead>
          <tbody>
            <?php foreach($posts as $post) { ?>
                  <tr>
                    <td><?php echo $post->title; ?></td>
                    <td><?php echo date("d/m/y", strtotime($post->created_at)); ?></td>
                    <td><a href="postview.php?id=<?php echo $post->id ?>">View</a></td>
                  </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<br>
<?php include 'inc/footer.php'; ?>
