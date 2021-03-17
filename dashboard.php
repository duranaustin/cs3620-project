<?php 
require_once('header.php'); 
require_once('./sessioncheck.php');
?>


    <!-- Begin page content -->
    <main role="main" class="container">
      <h1 class="mt-5">Austin's Favorite Shows</h1>
      

      <?php

        if(isset($_GET["del"]) AND $_GET["del"] == "true"){
          echo '<script language="javascript">';
          echo 'alert("Show was deleted")';
          echo '</script>';
        }
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        require_once('./show/show.php');

        $show = new show();
        $shows = $show->getMyShows($_SESSION["user_id"]);  

        if($shows != null){
        $arrlength = count($shows);
        }

        if(isset($arrlength)){
        for($x = 0; $x < $arrlength; $x++) {            
            echo '<div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">' . $shows[$x]->getShowName() . '</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Rating: ' . $shows[$x]->getShowRating() . '</h6>
                        <p class="card-text">' . $shows[$x]->getShowDescription() . '</p>
                        <a href="delete_show.php?show_id='.$shows[$x]->getShowId().'" class="card-link">Delete Show</a>
                    </div>
                  </div>
                  <br />';
        }
      }
      ?>


      <!--
     <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
     </div>
    -->

    </main>

<?php require_once('footer.php'); ?>