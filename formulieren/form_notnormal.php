<?php
    if(isset($_POST["submit"])){
        $name= $_POST["name"];
        $stock = $_POST["stock"];
        $yesno= $_POST["yesno"];
    ?>
    <h1>
    <?= $name ?>
    </h1>
    <h1>
    <?= $stock ?>
    </h1>
    <h1>
    <?= $yesno ?>
    </h1>
    <?php
    };
    header("refresh:3;url=form_normal.php");
    ?>