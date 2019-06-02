<?php include 'includes/header.php'; ?>

<form method="post" action="edit_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  
  <div class="form-group">
    <input type="submit" class="btn btn-primary" name="submit" value="submit"/>
    <a href="index.php" class="btn btn-default">Cancel</a>
    <input type="submit" class="btn btn-danger" name="delete" value="delete"/>
  </div>
  
</form>

<?php include 'includes/footer.php'; ?>   