
<div class="w-100 h-100" style="background-color: #f1f1f1">
  <?php
  include "header.php";
  ?>
  <div class="container pt-5">
    <div class="row align-items-end">
      <div class="col-md-3">
      <?php
   require('db.php');
  
   $AlbumID = $_GET['album'];  
   
   $sqlalbumcover1 = "SELECT AlbumCover FROM Album WHERE AlbumID=$AlbumID";
   $result = $db->query($sqlalbumcover1);
     
   while($row = $result->fetch_assoc()) {
   echo "<img src=". $row["AlbumCover"]. " style='width:100%' class='p-2' >";
  }

        ?>
        </div>

      <?php
       require('db.php');
      // get attributes from db

      $AlbumID = $_GET['album'];



     
      $type = "Album";

      $sqlalbumname = "SELECT AlbumTitle FROM Album WHERE AlbumID=$AlbumID";
      $resultname = $db->query($sqlalbumname);
      $name = $resultname->fetch_assoc();
      $name = $name["AlbumTitle"];
     
      $artistName = $name;



      $sqlalbumyear= "SELECT Released FROM Album WHERE AlbumID=$AlbumID";
      $resultrelease = $db->query($sqlalbumyear);
      $year = $resultrelease->fetch_assoc();
      // $year = $name["Released"];
      $albumDate = strtotime($year['Released']);
      $releaseYear = date("Y", $albumDate);
      


      $sqlsongs = "SELECT * FROM Song JOIN songlinks ON Song.SongID = songlinks.SongID AND Song.AlbumID = $AlbumID";
      $songs = $db->query($sqlsongs);
      $songResult = $songs->fetch_assoc();
      
      

      $length = "58 min 49 sec";
      echo <<<ALBUM
      <div class="col-md-9 px-5">
          <div class="row">
            <h4>{$type}</h4>
          </div>
          <div class="row">
            <h1 style="font-size: 36pt;">{$name}</h1>
          </div>
          <div class="row">
            <p>{$artistName} | {$releaseYear} | {$length}</p>
          </div>
      </div>
      ALBUM;
       ?>
  </div>

  <hr style="width: 100%;border: 1px solid #c4c4c4;">
    <?php

      echo <<<SONG
      <div class="row">
        <div class="col-md-1">
          
        </div>
        <div class="col-md-5">
          <a href="{$songResult['Link']}">{$songResult['SongTitle']}</a>
        </div>
        <div class="col-md-3">
          Rating: {$songResult['Rating']}
        </div>
        <div class="col-md-3">
          Length: {$songResult['Length']}
        </div>
      </div>
      SONG;
    
     ?>
</div>
