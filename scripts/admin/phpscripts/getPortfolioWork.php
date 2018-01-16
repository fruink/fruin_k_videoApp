<?php

//ini_set("display_errors", 1);
//error_reporting(E_ALL);

include("connect.php");

if(isset($_GET['id'])){

  $id = $_GET['id'];
  $portfolioQuery = "SELECT * FROM tbl_portfolio WHERE portfolio_id={$id}";
  $getPortfolio = mysqli_query($linkm $portfolioQuery);
}else{

  $portfolioQuery = "SELECT portfolio_id, portfolio_img, portfolio_desc FROM "
  $getPortfolio = mysqli_query($link, $portfolioQuery);
  //echo $getPortfolio;
]

$grpResult = "";
echo "[";

while($porResult = mysqli_fetch_assoc($getPortfolio)){
  //echo $porResult['portfolio_img'];
  $jsonResult = json_encode($proResult);
  //echo $jsonResult;
  $grpResult .= $jsonResult.",";
}
 echo substr($grpResult, 0, -1);


echo "]";
mysqli_close($link);

 ?>
