
  <div class="w-100 h-100" style="background-color: #f1f1f1">
    
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
          <div class="row pt-3">
            <a class="btn btn-success btn-block" href="/popular.php" style="border-radius: 20px;" role="button">
              Popular Albums
            </a>
          </div>
        </div>
        <div class="col-md-8">

        <?php
    include "header.php";
    require('db.php');


    $sqlalbumcover = "SELECT AlbumCover FROM Album";
    $result = $db->query($sqlalbumcover);

    echo "<div class='row'>";
    $counter = 0;
    while($row = $result->fetch_assoc()) {
      echo "<div class='col-md-4'><img src=". $row["AlbumCover"]. " style='width:100%' class='p-2' > </div>";
      $counter++;

      if($counter % 3 == 0){
        echo "</div> <div class='row'>";
      }
  }
  if($counter % 3 != 0){
  echo "</div>";
  }
     ?>

          <!--TODO: pull images from database -->
       
        </div>
      </div>
    </div>
  </div>
