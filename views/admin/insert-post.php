<html>
  <head>
    <title>Blog with Platzi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Title</h1>
        </div>
      </div>
      <div class="row">
          <div class="col-md-8">
            <h2>New Post</h2>
            <p>
              <a class="btn btn-default" href="<?php echo BASE_URL; ?>admin/posts">Back</a>
            </p>
            <?php
              if(isset($result) && $result) {
                echo '<div class="alert alert-success">Post Saved!</div>';
              }
            ?>

            <form method="post">
              <div class="form-group">
                <label for="inputTitle">Title</label>
                <input type="text" class="form-control" name="title" id="inputTitle">
              </div>
              <textarea class="form-control" name="content" id="inputContent" rows="5"></textarea>
                <br>
                <input class="btn btn-primary" type="submit" name="" value="Save">
            </form>
          </div>
        <div class="col-md-4">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum congue erat ac arcu volutpat lobortis. Aliquam nisl risus, pellentesque eu libero a, vehicula porta enim.
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <footer>
            This is a footer!<br>
            <a href="admin/index.php">Admin Panel</a>
          </footer>
        </div>
      </div>
    </div>
  </body>
</html>
