<?php
$user = "root";
$pass = "";
$host = "localhost";
$db = "db_portfolio";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  echo 'Something has gone wrong, ask for assistance...';
  exit;
}

//for all portfolio_img from tbl_portfolio
//if (isset($_GET["portfolio_img"])) {
//  $portfolio = $_GET["portfolio_img"];
//  $myQuery = "SELECT * FROM portfolio_img WHERE img = '$portfolio'";
//  $result = mysqli_query($conn, $myQuery);
//  $row = mysqli_fetch_assoc($result);
  //var_dump($row)
//  echo json_encode($row);
//};

// for one photo from tbl_portfolio / portfolio_img
if (isset($_GET["portfolio_img"])) {
  $myQuery = "SELECT * FROM tbl_portfolio";
  $result = mysqli_query($conn, $myQuery);
  $row = array();

  while($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  echo json_encode($rows);

};

 ?>
