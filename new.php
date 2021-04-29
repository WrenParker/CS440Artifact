
<div class="w-100 h-100" style="background-color: #f1f1f1">
  <?php
  include "header.php";
  ?>
  <div class="container">
    <div class="pt-5">
      <h2>New Releases</h2>
    </div>
    <?php
      //pull 30 latest albums
      $albumKeys = "";

      echo "<div class='row'>";
      for ($i=0; $i < 30; $i++) {
        $url = "/album.php/?album=".(string)$i;
        $col = <<<COL
        <div class="col-2">
          <a href={$url}><img src="/img/example.jpg" style="width:100%;" class="p-2" alt="uhoh"><a/>
        </div>
        COL;

        echo $col;
      }
      echo "</div>";
     ?>
  </div>
</div>
