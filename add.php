<?php
    include("pdo.php");

    try{
        $stmt = $pdo->prepare("INSERT INTO movies (title, score) VALUES(:t, :s)");
        $stmt->execute(array(
            ":t" => $_POST["title"],
            ":s" => $_POST["score"]
        ));
        echo "Query executed successfully!";
       } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
       }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="tilte">
        <input type="number" name="score">
       <input type="submit" name="login">
    </form>
</body>
</html>