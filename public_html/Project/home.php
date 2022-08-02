<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <h1>Home</h1>


    <h3>Highscores</h3>


    <form action="http://localhost:3000/Project/game.php">
         <button type="submit">Click me to play</button>
      </form>



    <?php





    ?>

    <?php
    //this is day which is the default
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "week";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
</div>
<?php
// require(__DIR__ . "/../../partials/footer.php");
?>