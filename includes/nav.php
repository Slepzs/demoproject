<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand" href="index.php">Demoproject</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
     <li class="burger"><a href="index.php" class="<?= $active == 'index' ? 'active' : '' ?>">Home<span class="sr-only">(current)</span></a></li>
     <li class="burger"><a href="about.php" class="<?= $active == 'about' ? 'active' : '' ?>">About<span class="sr-only">(current)</span></a></li>
     <li class="burger"><a href="contact.php" class="<?= $active == 'contact' ? 'active' : '' ?>">Contact<span class="sr-only">(current)</span></a></li>
     <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </li>
</div>
    </ul>
  </div>
</nav>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
  $('.dropdown-toggle').dropdown();
</script>
