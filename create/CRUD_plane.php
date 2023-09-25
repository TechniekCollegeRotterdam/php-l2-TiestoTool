<!-- create -->
<?php 
include("dbconnect.php");

if(isset($_POST["add_plane"])){

    $name = $_POST["name"];
    $stock = $_POST["stock"];
    $available = $_POST["available"];

    try{
        $query = "INSERT INTO plane (name, stock, available) VALUES (:name, :stock, :available)";
        $query_run = $db_connection->prepare($query);

        $planes = [
            ':name' => $name,
            ':stock' => $stock,
            ':available' => $available
        ];

    $query_execute = $query_run->execute($planes);

        if($query_execute){
            echo "Het is gelukt!";
            header("Location: index.php");
            exit(0);
        }else{
            echo "het is niet gelukt:(";
            header("Location: index.php");
            exit(1);
        }

    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
?>
<!-- update -->
<!-- delete -->
