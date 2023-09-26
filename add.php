<?php
    $pdo = new PDO("sqlite:lists.db");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if(isset($_POST["login"])){

       
        try{
            $stmt = $pdo->prepare("INSERT INTO users (name) VALUES(:un)");
            $stmt->bindParam(":un", $_POST["username"], PDO::PARAM_STR);
            $stmt->execute();
            echo "Query executed successfully!";
           } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
           }
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
        <input type="text" name="username">
        <input type="submit" name="login">
    </form>
    <br>
    <hr>
    <br>
    <?php
        $statement = $pdo->query("SELECT * FROM users");
        // 
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        // show it on the screen
        echo "<pre>";
        print_r($rows);
        echo "</pre>";
       
    ?>
</body>
</html>