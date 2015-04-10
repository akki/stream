<?php
  
  function getConnection()
{
   $db_pass="";
   $db_user="";
   $db_name="";
   $db_host="";

   $dbconn = mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die("Could not connect to database.");
   mysqli_error($dbconn);
   return $dbconn;
}
  
  getConnection();
?>
