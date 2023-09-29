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


if(isset($_POST["edit_client"])){

$client_id = $_POST["client_id"];

$firstname = $_POST["name"];

$lastname = $_POST["last_name"];

$gender = $_POST["email"];

$age = $_POST["age"];

$country = $_POST["country"];





try{

    $query = "UPDATE client SET firstname=:firstname, lastname=:lastname, gender=:gender, age=:age, country=:country WHERE id=:client_id";

    $query_run = $db->prepare($query);



$client = [

    ':client_id' => $client_id,

    ':firstname' => $firstname,

    ':lastname' => $lastname,

    ':gender' => $gender,

    ':age' => $age,

    ':country' => $country

];



$query_execute = $query_run->execute($client);



if($query_execute){

    echo "Het is bewerkt!";

    header("Refresh:3; url=index.php");

    exit(0);

} else{

    echo "Het is niet gelukt!";

    header("Refresh:3; url=index.php");

    exit(1);

}



} catch(PDOException $e){

echo $e->getMessage();

}



}


?>
has context menu

<!-- delete -->