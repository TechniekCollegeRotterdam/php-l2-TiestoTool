<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_notnormal.php" method="POST" >
        <label for="name">Naam vliegtuig</label>
        <input type="text" name="name">
<br>

        <label for="stock">stock</label>
        <input type="number" name="stock">
<br>
        <label for="yes">yes</label>
        <input type="radio" name="yesno" value="YES">
        <label for="no">no</label>
        <input type="radio" name="yesno" value="NO">
<br>
<br>
        <input type="submit" name="submit">

        
    </form>
    
    
</body>
</html>