
<div class="w-100 h-100" style="background-color: #f1f1f1">
  <?php
  require("header.php");
  ?>
  <div class="container">
    <div class="pt-5">
      <h2>Add an album</h2>
    </div>
    <form>
      <div class="form-group">
        <label for="RecordLabel">Record Label</label>
        <input type="text" name="RecordLabel" class="form-control" id="RecordLabel">
      </div>
      <div class="form-group">
        <label for="Artist">Artist</label>
        <input type="text" name="Artist" class="form-control" id="Artist">
      </div>
      <div class="form-group">
        <label for="Album">Album</label>
        <input type="text" name="Album" class="form-control" id="Album">
      </div>
      <div class="form-group">
        <label for="Song1">Song</label>
        <input type="text" name="Song1" class="form-control" id="Song1">
      </div>

      <div class="form-group">
        <label for="SongLink">SongLink</label>
        <input type="text" name="SongLink" class="form-control" id="SongLink">
      </div>

      <div class="form-group">
        <label for="AlbumCover">AlbumCover</label>
        <input type="text" name="AlbumCover" class="form-control" id="AlbumCover">
      </div>
      <input type="submit" value="Submit">

      <?php

    require("db.php");



        // Taking all 5 values from the form data(input)
        $RecordLabel = isset($_GET['RecordLabel']) ? $_GET['RecordLabel'] : NULL;
        $Artist = isset($_GET['Artist']) ? $_GET['Artist'] : NULL;
        $Album =  isset($_GET['Album']) ? $_GET['Album'] : NULL;
        $Song1 = isset($_GET['Song1']) ? $_GET['Song1'] : NULL;
        $SongLink = isset($_GET['SongLink']) ? $_GET['SongLink'] : NULL;
        $AlbumCover = isset($_GET['AlbumCover']) ? $_GET['AlbumCover'] : NULL;


        $conn = mysqli_connect($hostname, $username, $password, $database);

        // Performing insert query execution
        // here our table name is college



      $sqlq1 = "INSERT INTO `artist` (`ArtistName`) VALUES ('$Artist')";

      $sqlq2 = "INSERT INTO `album` (`AlbumTitle`, `AlbumCover`) VALUES ('$Album','$AlbumCover')";


      $sqlalbumID = "SELECT `AlbumID` FROM `album` WHERE `AlbumTitle` = '$Album'";
      $resultID = $db->query($sqlalbumID);
      $fresultID = NULL;
      while($row = $resultID->fetch_assoc()) {
       $fresultID =  $row["AlbumID"];
    }







      $sqlq3 = "INSERT INTO `song` (`SongTitle`, `AlbumID`) VALUES ('$Song1', '$fresultID')";

      $sqlsongID = "SELECT `SongID` FROM `song` WHERE `SongTitle` = '$Song1'";
      $resultsongID = $db->query($sqlsongID);
      $fbresultID = NULL;
      while($brow = $resultsongID->fetch_assoc()) {
       $fbresultID =  $brow["SongID"];
    }


      $sqlq4 = "INSERT INTO `songlinks` (`SongID`, `Link`) VALUES ('$fbresultID', '$SongLink')";

    $rs = mysqli_query($conn, $sqlq1);
    mysqli_query($conn, $sqlq2);
    mysqli_query($conn, $sqlq3);
    mysqli_query($conn, $sqlq4);

       if($rs){
           echo "<h3>data stored in a database successfully.<h3>";


       } else{

        }


        ?>



  </form>
  </div>
</div>
