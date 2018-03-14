<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    try {
        $connection = new PDO('mysql:host=localhost;dbname=Exercise3','root');
    } catch (PDOException $e) {
        echo 'Error';
    }
    $sql = "SELECT * FROM movie WHERE title";
    $statement = $connection->prepare($sql);
    if(!$statement->execute()){
        echo 'FAILED';
        return;
    }
    $all = $statement->fetchAll();
    foreach ($all as $line) {
        echo $line['title'] . ',' . $line['director'] . ',' . $line['year_of_prod'];
        
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Document</title>
</head>
<body>


    <form class="" action="Exercise.php" method="GET">
        <select name="title" placeholder="title">
          <option value="Adventure">Adventure</option>
          <option value="Art">Art</option>
          <option value="Documentary">Documentary</option>
          <option value="Drama">Drama</option>
        </select>
    </form>
</body>
</html>