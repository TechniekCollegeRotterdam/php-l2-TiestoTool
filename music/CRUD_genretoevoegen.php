<!-- create -->
<?php 
include("dbconnect.php");
if(isset($_POST["add_genre"])){
    $genre = $_POST["genre"];
    try{
        $query = "INSERT INTO genre (name) VALUES (:name)";
        $query_run = $db_connection->prepare($query);

        $genre = [
            ':name' => $genre
        ];

    $query_execute = $query_run->execute($genre);

        if($query_execute){
            echo "Het is gelukt!";
            header("Location: genre.php");
            exit(0);
        }else{
            echo "het is niet gelukt:(";
            header("Location: genre.php");
            exit(1);
        }

    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST["edit_genre"])){
$genre = $_POST["genre"];
try{
    $query = "UPDATE genre SET name=:name  WHERE id=:genre_id";
    $query_run = $db->prepare($query);

$genre = [
    ':name' => $genre,
];

$query_execute = $query_run->execute($genre);
if($query_execute){
    echo "Het is bewerkt!";
    header("Refresh:3; url=genre.php");
    exit(0);
} else{
    echo "Het is niet gelukt!";
    header("Refresh:3; url=genre.php");
    exit(1);
}
} catch(PDOException $e){
echo $e->getMessage();
}
}

if(isset($_POST["delete"])){

        $genre_id = $_POST["delete_genre"];
        var_dump($genre_id);
    try{

            $query = "DELETE FROM genre  WHERE id=:genre_id";

            $query_run = $db_connection->prepare($query);
        $genrelist = [

            ':genre_id' => $genre_id,

        ];
        $query_execute = $query_run->execute($genrelist);

        if($query_execute){
            echo "Het is verwijderd!";
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