<!-- create -->
<?php 
include("dbconnect.php");
if(isset($_POST["add_name"])){
    $name = $_POST["name"];
    try{
        $query = "INSERT INTO playlist(name) VALUES (:name)";
        $query_run = $db_connection->prepare($query);

        $name = [
            ':name' => $name
        ];

    $query_execute = $query_run->execute($name);

        if($query_execute){
            echo "Het is gelukt!";
            header("Location: afspeellijstdb.php");
            exit(0);
        }else{
            echo "het is niet gelukt:(";
            header("Location: afspeellijstdb.php");
            exit(1);
        }

    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
if(isset($_POST["edit_playlist"])){
$name = $_POST["name"];
try{
    $query = "UPDATE playlist SET name=:name,  WHERE id=:playlist_id";
    $query_run = $db->prepare($query);
$name = [
    ':name' => $name,
];
$query_execute = $query_run->execute($name);
if($query_execute){
    echo "Het is bewerkt!";
    header("Refresh:3; url=afspeellijstdb.php");
    exit(0);
} else{
    echo "Het is niet gelukt!";
    header("Refresh:3; url=afspeellijstdb.php");
    exit(1);
}
} catch(PDOException $e){
echo $e->getMessage();
}
}

if(isset($_POST["delete_playlist"])){

        $playlist_id = $_POST["delete_playlist"];
    try{
            $query = "DELETE FROM playlist  WHERE id=:playlist_id";
            $query_run = $db_connection->prepare($query);
        $playlist = [

            ':playlist_id' => $playlist_id,

        ];
        $query_execute = $query_run->execute($playlist);

        if($query_execute){
            echo "Het is verwijderd!";
            header("Refresh:3; url=afspeellijstdb.php");
            exit(0);
        } else{
            echo "Het is niet gelukt!";
            header("Refresh:3; url=afspeellijstdb.php");
            exit(1);
        }

        } catch(PDOException $e){
        echo $e->getMessage();
        }
        }
    ?>