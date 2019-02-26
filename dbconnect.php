<?php
$hostname="localhost";
$hostuser="root";
$hostpassword="";
$dbname="hotel";
  // CREATE CONNECTION
  $ conn= new mysqli($hostname,$hostuser,$hostpassword,$dbname);
  //check connection
  if($conn->connect_error)
  {
  die("connection failed".$conn->error);
  }else{
  print"connection successful";
  }
  ?>

