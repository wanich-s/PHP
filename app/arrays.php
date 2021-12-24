<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
<?php
    // Array
    $friends = array("Kenvin", "Karen", "Oscar", "Jim");
    array_push($friends, "Wanich");
    // array_pop($friends);
    echo "$friends[4] <br>";
    echo count($friends);
?>
    <form action="arrays.php" method="post">
        Apples:<input type="checkbox" name="fruits[]" value="apples" />
        Oranges:<input type="checkbox" name="fruits[]" value="oranges" />
        Pears:<input type="checkbox" name="fruits[]" value="pears" />
        <input type="submit" value="OK">
    </form>
    <?php
    $fruits = $_POST["fruits"];
    echo $fruits[0] . "<br>";
    ?>
    <form action="arrays.php" method="post">
        Name: <input type="text" name="student">
        <input type="submit" value="OK">
    </form>
    <?php
    // Associative Array
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"B", "Wanich"=>"A+");    
    $student = $_POST['student'];
    echo $grades[$student];
?>
</body>
</html>