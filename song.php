<?php
  // echo 'hello world!';
  
  $site=$_GET['site'];
  echo $site;
  $site_lower=strtolower($site);
  if(!(substr( $site_lower, 0, 4 ) === "http"))
  {
    $site="http://".$site;
	
  }
  $find="watch";
  $pos = strpos($site, $find);
  $insert = "_popup";
//  if($_GET["hd"]==1)
//  {
//    $site.="&hd=1";
//  }
  var_dump($pos);
/*  if($pos)
  {
    $pos+=5;
    $site=substr_replace($site,$insert,$pos,0);
	echo $site;
  }*/
  echo $site;
  header("Location: $site");
//  session_destroy();
?>
