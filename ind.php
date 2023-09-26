<?php
    include("pdo.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello</h1>
    <a href="add.php"></a>
    <?php
  

        $statement = $pdo->query("SELECT * FROM movies");
        // 
        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
        // show it on the screen
        // echo "<pre>";
        // print_r($rows);
        // echo "</pre>";

        echo "  <table border = 1>
        <tr> 
            <th>Movie</th> 
            <th>Score</th>
        </tr> ";
        foreach($rows as $row => $movie){
            echo "
            <tr> 
                <td>{$movie['title']}</td>
                <td>{$movie['score']}</td>
             </tr> ";
        }
        echo "</table>";

       
    ?>
</body>
</html>
<?php
   
?>


