<?php
$host="localhost";
$username="einsteinium23";
$pass="B4xt3R23";
$dbname="survivtips";
$dsn="mysql:lhost=$host;dbname=$dbname";
$options=array(
PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
);
$connection= NEW pdo($dsn, $username, $pass, $options);




