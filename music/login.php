<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<?php
   if(isset($_POST['login'])){
      //Starting the session    
      $id = session_create_id();    
      session_id($id);
      session_start();  
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['password']  = $_POST['password'];    
      session_commit();
   }
?>
 
    <?php
//     require 'login.php';
if(isset($_POST['login'])){
    session_start();
    require 'dbconnection.php';
 
       
            try
            {
                $sQuery = "SELECT * FROM client WHERE email = :email";
               
                $oStmt =   $db_connection->prepare($sQuery);
                $oStmt->bindValue (':email',$_POST['email']);
                $oStmt->execute();
               
                if($oStmt->rowCount()==1)
                {
                    $rij= $oStmt->fetch(PDO:: FETCH_ASSOC);
                    if(password_verify($_POST['password'],$rij['password']))
                    {
                        $_SESSION['email']=$rij['email'];
                        $_SESSION['password']=$rij['password'];
                       
                       
                        if($rij['isadmin']=="1")
                        {
                       
 
                            header ('Refresh: 1; url=beginb.php');
                             include "nav.html";
                            echo "<div class=\"panel-heading\">Beheer login is succsesvol.</div>";
                            //echo "<h2>Login succesvol</h2>";
                            exit();
                        }
                        else
                        {
                       
                            header('Refresh: 1; url=begink.php');
                            include "nav.html";
                            echo "<div class=\"panel-heading\">Klant login is succsesvol.</div>";
                          // header('Refresh: 3; url=begink.php');
                            die();
                        }
                    }
                    else
                    {
                        echo "<div class=\"panel-heading\">Helaas, login niet succsesvol.</div>
                            <div class=\"panel-body\">Deze combinatie van de email en wachtwoord is niet juist!</div>";
                        header('Refresh: 3; url=index.php');
                        exit();
                    }
                }
                else {
                    echo "<div class=\"panel-heading\">Helaas, login niet succsesvol.</div>
                    <div class=\"panel-body\">Deze combinatie van de email en wachtwoord is niet juist!</div>";
                    header('Refresh: 3; url=index.php');
                    exit();
                }
            }
            catch(PDOExeption $e) {
                echo $e -> getMessage();
            }
           
 
        }
        else{
            echo "Login button niet herkend <br>";
            header('location:index.php');
            exit();
        }  
            ?>
</body>
</html>            