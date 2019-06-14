<?php
include './admin/adminsession.php';
include "conn.php";
if (isset($_POST['SubmitChange'])) {
  $title = ($_POST['Title']);
$description = ($_POST['description']);
$title = ($_POST['Title']);
$imgurl = ($_POST['imgurl']);
$vidurl = ($_POST['vidurl']);
$userid = ($_SESSION['id']);
//Insert Data Into Database
$sql = "INSERT INTO usersubmissions (title, `description`, `imgurl`, vidurl, userid) VALUES ('$title', '$description', '$imgurl', '$vidurl', $userid)";
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
    <?php include 'nav.php'; ?>

<div class="container">
<div class="row">
<div class="col">
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>
<h4>Post Submission:</h4>
<form action="" method="post">
<div class="form-group">
    <label for="Title">Title</label>
    <input type="text" name="Title" id="Title">
</div>
<div class="form-group">
    <label for="imgurl">Image URL</label>
    <input type="text" name="imgurl" id="imgurl">
</div>
<div class="form-group">
    <label for="vidurl">Link to Video</label>
    <input type="text" name="vidurl" id="vidurl">
</div>
<div class="form-group">
    <label for="description">Description and Tips</label><br>
    <textarea name="description" id="description" cols="30" rows="10"></textarea>
</div>
<button type="submit" name="SubmitChange" class="btn btn-success">Post Submission</button>
</form>

    </div>

</div>


</div>


</div>


</body>
</html>
