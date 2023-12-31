<!-- create -->
<?php 
include("dbconnect.php");
if(isset($_POST["add_genre"])){
    $name = $_POST["genre"];
    try{
        $query = "INSERT INTO genre (name) VALUES (:name)";
        $query_run = $db_connection->prepare($query);

        $name = [
            ':name' => $name
        ];

    $query_execute = $query_run->execute($name);

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
$name = $_POST["name"];
try{
    $query = "UPDATE genre SET name=:name,  WHERE id=:genre_id";
    $query_run = $db->prepare($query);
$name = [
    ':name' => $name,
];
$query_execute = $query_run->execute($name);
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

if(isset($_POST["delete_genre"])){

        $genre_id = $_POST["delete_genre"];
    try{
            $query = "DELETE FROM genre  WHERE id=:genre_id";
            $query_run = $db_connection->prepare($query);
        $genre = [

            ':genre_id' => $genre_id,

        ];
        $query_execute = $query_run->execute($genre);

        if($query_execute){
            echo "Het is verwijderd!";
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
    ?>