<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including HTML</title>
</head>
<body>
    <?php include "header.html"; ?>
    <p>Hello World</p>
    <?php include "footer.html"; ?>
    <hr>
    <?php $title = "My First Post";
    $author = "Wanich";
    $wordCount = 400;
    include "article-header.php"; 
    echo "<hr>";
    include "useful-tool.php";
    echo $feetInMile . "<br>";
    sayHi("Wanich");?>
</body>
</html>