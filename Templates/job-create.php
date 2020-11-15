  <!DOCTYPE html>
<html lang="en">
  <head>
    <title>Voyage - Services</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Job lister</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
             <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="create.php" class="nav-link">Create Listing</a></li>
            <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="http://localhost/registration/login.php" class="nav-link">LogOut</a></li>
          </ul>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
  <div class="container">
   <h2 class="page-header">Create Job Listing</h2>
  <form method="post" action="create.php"> 
    <div class="form-group">
      <label>Company</label>
      <input type="text" class="form-control" name="company">
    </div>

    <div class="form-group">
    <label>Choose category</label>
    <select class="form-control" name="category">
         <option value="0">Choose Category</option>
         <?php foreach($categories as $category): ?>
          <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
        <?php endforeach; ?>
      </select>


    </div>
  	
    <div class="form-group">
  		<label>Job title</label>
  		<input type="text" class="form-control" name="job_title">
    </div>

    <div class="form-group">
    <label>Description</label>
    <textarea class="form-control" name="description"></textarea>
    </div>

    
    <div class="form-group">
    <label>Location</label>
    <input type="text" class="form-control" name="location">
    </div>

    <div class="form-group">
    <label>Salary</label>
    <input type="text" class="form-control" name="salary">
    </div>

    

    <div class="form-group">
    <label>Contact User</label>
    <input type="text" class="form-control" name="contact_user"></div>
     
     <div class="form-group">
    <label>Contact_Email</label>
    <input type="text" class="form-control" name="contact_email"></div>

    <input type="submit" class="btn btn-success" value="Submit" name="submit">

  </form>
 </div>
 <br><br><br><br><br><br>

  <?php include 'inc/footer.php'; ?>