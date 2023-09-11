<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form2.php" method="POST">
        <label for="name">naam</label>
        <input type="text" name="name">
<br>
        <label for="lastname">achternaam</label>
        <input type="text" name="lastname">
<br>
        <label for="sex">man</label>
        <input type="radio" name="sex" value="man">
        <label for="sex">vrouw</label>
        <input type="radio" name="sex" value="vrouw">
<br>
        <label for="age">leeftijd</label>
        <input type="number" name="age">
<br>
        <label for="country">land</label>
        <select name="country">
            <option value="nederland">Nederland</option>
            <option value="belgië">België</option>
            <option value="duitsland">Duitsland</option>
            <option value="frankrijk">frankrijk</option>
            <option value="spanje">spanje</option>
        </select>
<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>