<?php
//  echo "It Works!";
  include 'connection.php';
  include 'queries.php';
  
//  var_dump($_POST);

  $conn=getConnection();
  
  $last_song    = retrieve($conn);
  $id           = $last_song["id"];
  $played       = $last_song["played"];
  $last_song    = $last_song["song_link"];
//  if($_POST["hd"]=="on"){ echo "&hd=1";} 
  
  if($_POST)
  {
    $request_song = $_POST['link'];
    insert($request_song,$conn);
  }


  if($played=='0')
  {
    change_played($id,$conn);
  	echo $last_song;
//	include 'player_now.php';

//    <!--<script>
//      var win=window.open("song.php?site= <php echo $last_song; ", '_blank','');
//      win.focus();
//	</script>

  }
//  echo $_GET["load"];
  if($_GET)
  {
    if($_GET["load"]==1)
    {
  //    echo 'hi';
    header("Location: .");
    }
  }
  
?>
