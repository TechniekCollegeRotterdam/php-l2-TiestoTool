<?php
if(isset($_POST["submit"])){
    $name= $_POST["name"];
    $lastname= $_POST["lastname"];
    $sex= $_POST["sex"];
    $age= $_POST["age"];
    $country= $_POST["country"]
?>
<h1>
<?= $name ?>
</h1>
<h1>
<?= $lastname ?>
</h1>
<h1>
<?= $sex ?>
</h1>
<h1>
<h1>
    <?= $country ?>
</h1>
</h1>
<h1>
<?= $age ?>
</h1>
<?php
};
header("refresh:3;url=form.php");
?>