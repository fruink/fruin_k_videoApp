<?php
    //set up connection creds

    $user = "root";
    $password = "";
    $url = "localhost";
    $db = "db_portfolio";

    //don't change below
    $link = mysqli_connect($url, $user, $password, $db);

    //Check Connection
    if(mysqli_connect_errno())
    {
      printf("Connection Failed: %s\n", mysqli_connect_error());
      exit();
    }
?>
