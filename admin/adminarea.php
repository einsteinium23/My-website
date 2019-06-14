<?php
include "../conn.php";
if (isset($_POST['SubmitChange'])) {
  $title = ($_POST['Title']);
$Changelog = ($_POST['Changelog']);
$date = $_POST['date'];
//Insert Data Into Database
$sql = "INSERT INTO changelog (title, changelog, `date`) VALUES ('$title', '$Changelog', '$date')";
$connection->exec($sql);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php include 'navadmin.php'; ?>
    <?php include 'adminsession.php'; ?>
<div class="container">
<div class="row">
<div class="col">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
<h4>Update Changelog:</h4>
<form action="" method="post">
<div class="form-group">
    <input type="text" name="Title" id="Title">
</div>
<div class="form-group">
    <input type="date" name="date" id="date">
</div>
<div class="form-group">
    <textarea name="Changelog" id="Changelog" cols="30" rows="10"></textarea>
</div>
<button type="submit" name="SubmitChange">Update Changelog</button>
</form>

    </div>

</div>


</div>


</div>


</body>
</html>
