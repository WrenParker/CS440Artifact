
  <div class="w-100 h-100" style="background-color: #f1f1f1">
    <?php require("header.php"); ?>
    <div class="container">
      <div class="row pt-5 align-items-center">
        <div class="col-md-4">
          <div class="row">
            <h2>Looking for music?</h2>
          </div>
          <div class="row">
            <h3>Start listening to the best new releases.</h3>
          </div>
          <div class="row pt-3">
            <a class="btn btn-success btn-block" href="/new.php" style="border-radius: 20px;" role="button">
              New Releases
            </a>
          </div>
        </div>
        <div class="col-md-8">

          <?php
          require('db.php');
            //pull 30 latest albums
          $albumKeys = "";
          $sqlalbumcover = "SELECT AlbumCover,AlbumID FROM Album";
          $result = $db->query($sqlalbumcover);

            echo "<div class='row'>";
            $counter = 1;
            while(($row = $result->fetch_assoc()) && ($counter < 30) ) {

              $counter++;
              $url = "/album.php/?album=".$row["AlbumID"];
              $albumcover = $row["AlbumCover"];
              $col = <<<COL

              <div class='col-md-4'>
                <a href={$url}><img src={$albumcover} style="width:100%;" class="p-2" alt="album cover"></a>
              </div>
              COL;

              echo $col;
            }
            echo "</div>";
           ?>

          <!--TODO: pull images from database -->

        </div>
      </div>
    </div>
  </div>
