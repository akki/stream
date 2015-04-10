<?php

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

  header("Location: $site");
?>
