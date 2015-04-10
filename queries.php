<?php
  
function insert($request_song,$conn)
{
  
/*
  if(!conn)
  {
    $conn = getConnection();
  }
*/
  $request_song = addslashes($request_song);
  $query     = 'INSERT INTO stream (song_link) VALUES ('."'".$request_song."'".')';
  $exec      = mysqli_query($conn,$query);

}

function retrieve($conn)
{
  
/*
  if(!conn)
  {
    $conn = getConnection();
  }
  */

  $query     = 'SELECT * FROM stream ORDER BY id DESC LIMIT 1';
  $res       = mysqli_query($conn,$query);
  // $row       = mysqli_fetch_assoc($res);
  while($row=mysqli_fetch_array($res))
  {
    // array_push($return, $row);
    return $row; 
  }
  
  return $res;

}

function change_played($id,$conn)
{
   
/*
  if(!conn)
  {
    $conn = getConnection();
  }
  */
  
  $query = "UPDATE stream SET played = '1' where id = ".$id;
  $res   = mysqli_query($conn,$query);

}

function create_table()
{
  $query = "CREATE TABLE stream (
  id INT NOT NULL AUTO_INCREMENT,
  song_link TEXT NOT NULL,
  played BOOL DEFAULT 0,
  createdAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
  );";

  mysqli_query($conn, $query);
}