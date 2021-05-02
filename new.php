
<div class="w-100 h-100" style="background-color: #f1f1f1">
  <?php
  include "header.php";
  
  ?>
  <div class="container">
    <div class="pt-5">
      <h2>New Releases</h2>
    </div>
    <?php
    require('db.php');
      //pull 30 latest albums
      $albumKeys = "";
    $sqlalbumcover = "SELECT AlbumCover,AlbumID FROM Album";
    $result = $db->query($sqlalbumcover);

      echo "<div class='row'>";
      $counter = 0;
      while(($row = $result->fetch_assoc()) && ($counter < 30) ) {
        
        $counter++;
        $url = "/album.php/?album=".$row["AlbumID"];
        $albumcover = $row["AlbumCover"];
        $col = <<<COL
        <div class="col-2">
          <a href={$url}><img src={$albumcover} style="width:100%;" class="p-2" alt="uhoh"></a>
        </div>
        COL;

        echo $col;
       
      }
      echo "</div>";
     ?>
  </div>
</div>
