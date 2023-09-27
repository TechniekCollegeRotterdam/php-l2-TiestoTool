<!-- create -->
<?php 
include("dbconnect.php");

if(isset($_POST["add_client"])){

    $name = $_POST["name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];

    try{
        $query = "INSERT INTO client (name, last_name, email) VALUES (:name, :last_name, :email)";
        $query_run = $db_connection->prepare($query);

        $client = [
            ':name' => $name,
            ':last_name' => $last_name,
            ':email' => $email
        ];

    $query_execute = $query_run->execute($client);

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