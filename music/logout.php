<?php
session_start();
session_destroy();
echo "U bent succesvol uitgelogt!";
header("Refresh:1; url=index.php");
?>