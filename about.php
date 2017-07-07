<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'about' ?>
    <?php include('includes/head.php'); ?>
    <title>About</title>
  </head>
  <body>
  <?php include('includes/nav.php'); ?>
  <div class="container-fluid abouthero">
    <div class="row">
        <div class="col-xs-12 col-md-8 col-centered aboutbox">
          <div class="col-xs-12 col-md-12">
            <h2>About Me <span class="glyphicon glyphicon-user"></span></h2>
            <hr>
          </div>
          <div class="col-xs-12 col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xs-12 col-md-6">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-xs-12 col-md-12 contactme">
            <h3>Contact Me</h3>
            <a href="contact.php" class="btn btn-primary-lg aboutbutton" role="button">Here <span class="glyphicon glyphicon-arrow-right"></span></a>
          </div>
        </div>
        <div class="col-xs-12 col-md-12 fill">
        </div>
    </div>
  </div>


  <?php include('includes/footer.php'); ?>
  <?php include('includes/bootscript.js'); ?>
  </body>
</html>
