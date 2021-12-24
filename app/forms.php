<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<?php            
    // Getting User Input    
?>
    <form action="forms.php" method="post">
        Name: <input type="text" name="name">
        <br>
        Age :<input type="number" name="age">
        <input type="submit" value="OK">
    </form>
<?php
    echo "Name: " . $_POST["name"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
?>
</body>
</html>