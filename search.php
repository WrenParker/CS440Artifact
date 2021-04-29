
<div class="w-100 h-100" style="background-color: #f1f1f1">
  <?php
  include "header.php";
  ?>
  <div class="container">
    <?php
    //ALBUMS
    $searchTerm = "";
    if(isset($_GET['search'])) $searchTerm = $_GET['search'];
    echo <<<HEADER
    <div class="pt-5">
      <h2>"{$searchTerm}" in Albums</h2>
    </div>
    HEADER;
      //pull 30 latest albums
      $albumKeys = "";

      echo "<div class='row'>";
      for ($i=0; $i < 6; $i++) {
        $url = "/album.php/?album=".(string)$i;
        $col = <<<COL
        <div class="col-2">
          <a href={$url}><img src="/img/example.jpg" style="width:100%;" class="p-2" alt="uhoh"><a/>
          <p class="pl-2">album name</p>
        </div>
        COL;

        echo $col;
      }
      echo "</div>";
     ?>

     <?php
     //ARTISTS
     $searchTerm = "";
     if(isset($_GET['search'])) $searchTerm = $_GET['search'];
     echo <<<HEADER
     <div class="pt-5">
       <h2>"{$searchTerm}" in Artists</h2>
     </div>
     HEADER;
       //pull 30 latest albums
       $albumKeys = "";

       echo "<div class='row'>";
       for ($i=0; $i < 6; $i++) {
         $url = "/album.php/?album=".(string)$i;
         $col = <<<COL
         <div class="col-2">
           <a href={$url}><img src="/img/example.jpg" style="width:100%;" class="p-2" alt="uhoh"><a/>
           <p class="pl-2">artist name</p>
         </div>
         COL;

         echo $col;
       }
       echo "</div>";
      ?>

      <?php
      //Songs
      $searchTerm = "";
      if(isset($_GET['search'])) $searchTerm = $_GET['search'];
      echo <<<HEADER
      <div class="pt-5">
        <h2>"{$searchTerm}" in Songs</h2>
      </div>
      HEADER;
        $albumKeys = "";

        echo "<div class='row'>";
        for ($i=0; $i < 6; $i++) {
          $url = "/album.php/?album=".(string)$i;
          $col = <<<COL
          <div class="col-2">
            <a href={$url}><img src="/img/example.jpg" style="width:100%;" class="p-2" alt="uhoh"><a/>
            <p class="pl-2">song name</p>
          </div>
          COL;

          echo $col;
        }
        echo "</div>";
       ?>
  </div>
</div>
