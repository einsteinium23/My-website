
  <?php
include '../conn.php';

//Check if user has submitted form
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $password2 = $_POST['password2'];

    if ($password == $password2) {
        $password = password_hash($password, PASSWORD_DEFAULT);

    //Insert Data Into Database
    $sql = "INSERT INTO `admin` (username, `password`, email) VALUES ('$username', '$password', '$email')";
    $connection->exec($sql);


    } else {
      echo "<h1>Passwords do not match</h1>";
    }

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
include 'navadmin.php'; ?>
  <div class="container">
    <h1>Register</h1>
  
    <form action="" method="post">
      <div class="form-group">
        <label for="username">Enter Username:</label>
        <input type="text" name="username" id="username" required>
  
      </div>
      <div class="form-group">
        <label for="email">Enter Email:</label>
        <input type="email" name="email" id="email" required>
  <p>Put in your email to see weekly featured tips and content!</p>
      </div>
  
      <div class="form-group">
        <label for="password">Enter Password</label>
        <input type="password" name="password" id="password" required>
      </div>
  
      <div class="form-group">
        <label for="password2">Confirm Password</label>
        <input type="password" name="password2" id="password2" required>
      </div>
  
      <button type="submit" class="btn btn-success" name="register">Register</button>
  
    </form>
  </div>

</body>

</html>



  