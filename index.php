<?php 
include "conn.php";
session_start();


//get all data from users
$sql = "SELECT* FROM changelog ORDER BY created_at DESC";
$statement = $connection->prepare($sql);

$statement->execute();
$changelog=$statement->fetchALL();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surviv.io Tips and Tricks!</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php include "./nav.php" ?>
  <div class="container">
        
          <h2 class="text-dark">Surviv.io Tips and Tricks!</h2>
          <?php if (isset($_SESSION['type'])) { ?>
            <h3> Welcome <?php echo $_SESSION['username'];?>!</h3>
         <?php }
          ?>
            </div>
          </nav>
        </nav>
<div class="container">
    <div class="row"><div class="col">
<p>Surviv.io is a web browser game much like Player Unknown's Battlegrounds, or PUBG, in the sense it is in the battle royale genre of games. Unlike PUBG, surviv.io is 2-dimensional.</p>
<img width="700" src="img/TheRealDesertGhillie.png" alt="">  
<h6>Shown here is a player with the Ghillie Suit, which in grass makes you completely invisible except for your hands.</h6>
<h3>The weapons ranked from best to worst:</h3>
<img src="img/Tierlist.png" width="700" alt="surviv.io tier list">
</div>
<div class="col">
<h3>Surviv.io Changelog:</h3>


<?php
if ($changelog && $statement->rowCount() > 0) {
   foreach ($changelog as $c ) { ?>
   <div class="card mt-3" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $c['title'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo date('M d, Y', strtotime($c['date']));?></h6>
    <p class="card-text"><?php echo $c['changelog'];?></p>
  </div>
</div>


<?php
   }
  }
  ?>

</div>
</div></div></div>


<div class="row">

</div>
</div>

    
</body>
</html>