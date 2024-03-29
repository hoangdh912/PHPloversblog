<?php include 'includes/header.php'; ?>

<form method="POST" action="edit_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="custom-select" name="category">
	  <option selected>News</option>
	  <option>Events</option>
	</select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
  </div>
  
  <div class="form-group">
  <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input type="submit" class="btn btn-danger" name="delete" value="delete"/>
  </div>
  
</form>


<?php include 'includes/footer.php'; ?>     