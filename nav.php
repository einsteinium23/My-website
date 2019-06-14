<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="index.php">Home</a>
  </li>
  <li class="nav-item">
  <li class="nav-item">
    <a class="nav-link" href="tipsandtricks.php">Tips and Tricks</a>
  </li>
    <a class="nav-link" href="./admin/admin.php">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="./admin/register.php">Create an Account</a>
  </li>
  <?php if(isset($_SESSION['loggedin'])) { ?>

<li class="nav-item">
  <a class="nav-link" href="usersubmit.php">Post Submission</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout.php">Logout</a>
</li>
<?php } ?>

<?php if(isset($_SESSION['loggedin'])) { 
  if ($_SESSION['type'] == 'admin') { ?>

  <li class="nav-item">
  <a class="nav-link" href="./admin/adminarea.php">Admin Area</a>
</li>
<?php } ?>



<?php } ?>
</ul>