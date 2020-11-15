<?php include 'inc/header.php'; ?>

  
<div class="container">
<h2 class="page-header"><?php echo $job->job_title; ?> (<?php echo $job->location; ?>)</h2>


<small>Posted by <?php echo $job->contact_user; ?> on <?php echo $job->post_date; ?></small>
<hr>
<p class="lead"><?php echo $job->description;?></p>
<ul class="list-group">
	<li class="list-group item"><strong>Company:</strong><?php echo $job->company; ?></li>
	<li class="list-group item"><strong>Salary:</strong><?php echo $job->salary; ?></li>
	<li class="list-group item"><strong>Contact_email:</strong><?php echo $job->contact_email; ?></li>
	<li class="list-group item"><strong>Location:</strong><?php echo $job->location; ?></li>

    
</ul>
<br><br><br>
<a href="index.php"><button class="btn btn-info">Go back</button></a> 
</div>
<br>
<div class="container">
   <div class="well">
	 <a href="edit.php?id=<?php echo $job->id; ?>" class="btn btn-primary">Edit</a>

	  <form style="display:inline" method="POST" action="job.php">
		<input type="hidden" name="del_id" value="<?php echo $job->id; ?>">
		<input type="submit" class="btn btn-danger" value="Delete">
	  </form>
    </div>
</div>
<br><br><br><br>

<?php include 'inc/footer.php'; ?>
  




 