<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {

            padding: 20px;

        }

        .container {

            max-width: 800px;

        }

        .btn-action {

            margin-right: 5px;

        }
    </style>
</head>
<body>

<div class="container">
<?php

    include("dbconnect.php");
?>
    <h1>Client List</h1>
    <a href="client.php" class="btn btn-success btn-action">Add Client</a>

    <table class="table">
        <thead>
            <tr>
                <th>Firstname</th>

                <th>Lastname</th>

                <th>email</th>

                <th>Action</th>

            </tr>
        </thead>

        <tbody>
            <?php
            try {
                $query = "SELECT * FROM client";

                $get_clients = $db_connection->prepare($query);

                $get_clients->execute();

 

                $clients = $get_clients->fetchAll();

 

                if ($clients) {

                    foreach ($clients as $client) {

                        ?>

                        <tr>

                            <td><?= $client["name"] ?></td>

                            <td><?= $client["last_name"] ?></td>

                            <td><?= $client["email"] ?></td>

                            <td>

                                <a href="edit_client.php?id=<?= $client['id']?>" class="btn btn-primary btn-action">Edit</a>

                                <form action="CRUD_client.php" method="POST" style="display: inline;">

                                    <input type="hidden" name="delete_client" value="<?= $client['id'] ?>">

                                    <button type="submit" class="btn btn-danger btn-action">Delete</button>

                                </form>
                            </td>
                        </tr>
                     <?php
                    }
               }
            } catch (PDOException $e) {

                echo "Connection failed: " . $e->getMessage();

            }

            ?>

        </tbody>
    </table>
</div>
</body>
</html>