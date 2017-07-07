<!DOCTYPE html>
<html>
  <head>
    <?php $active = 'contact' ?>
    <?php include('includes/head.php'); ?>
    <title>Contact</title>
  </head>
  <body>
  <?php include('includes/nav.php'); ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-12 col-md-12 contactbox">
        <div class="col-xs-12 col-md-12 question">
          <h1>Have a question?</h1>
          <p>Get in Touch</p>
        </div>
        <div class="col-md-12">
        <form class="form-hoizontal" action="contact.php" method="post">
          <div class="form-group">
            <div class="col-xs-12 col-md-6 form">
              <label for="InputName" class="control-label">* Name</label>
                <input id="name" type="text" class="form-control" name="Name" required>
            </div>
            <div class="col-xs-12 col-md-6 form">
              <label for="InputLastName" class="control-label">* Last Name</label>
                <input id="lastName" type="text" class="form-control" name="LastName" required>
            </div>
            <div class="col-xs-12 col-md-6 form">
              <label for="InputEmail" class="control-label">* Email</label>
                <input id="email" type="email" class="form-control" name="Email" required>
            </div>
            <div class="col-xs-12 col-md-6 form">
              <label for="InputPhoneNumber" class="control-label">* Phone</label>
                <input id="textfield" type="text" class="form-control" name="phone" required>
            </div>
            <div class="col-xs-12 col-md-12 form">
              <label for="InputMessage" class="control-label">* Message</label>
              <textarea class="form-control" rows="3"></textarea>
              <input id="submit" class="btn btn-primary submit" type="submit" name="" value="Send" onclick="sendFunc()">
            </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-xs-12 col-md-12 fill">
      </div>
    </div>
  </div>
  <script type="text/javascript">
    function sendFunc() {
      alert('Your message has been sent');
    }
  </script>
  <script type="text/javascript">
  function sendFunction() {
    alert("Your message has been sent");
  }
  </script>

  <?php include('includes/footer.php'); ?>
  <?php include('includes/bootscript.js'); ?>
  </body>
</html>
