<?php

  include 'connection.php';
  include 'queries.php';

  $conn=getConnection();
  
  $last_song    = retrieve($conn);
  $id           = $last_song["id"];
  $played       = $last_song["played"];
  $last_song    = $last_song["song_link"];
  
  if($_POST)
  {
    $request_song = $_POST['link'];
    insert($request_song,$conn);
  }

if($played=='0')
{
    change_played($id,$conn);
  	echo $last_song;
}

if($_GET)
{
    if($_GET["load"]==1)
    {
      header("Location: .");
    }
}
  
?>
