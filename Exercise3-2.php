
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
<title>Document</title>
</head>
<body>
<?php 

if($_SERVER['REQUEST_METHOD']==='POST') {
    $title = $_POST['title'] ?? NULL;
    $actors = $_POST['actor'] ?? NULL;
    $director = $_POST['director'] ?? NULL;
    $producer = $_POST['producer'] ?? NULL;
    $yearOfProd = $_POST['year_of_prod'] ?? NULL;
    $language = $_POST['lang'] ?? NULL;
    $category = $_POST['category'] ?? NULL;
    $storyLine = $_POST['storyline'] ?? NULL;
    
    $titleSuccess = (is_string($title) && strlen($title)>4);
    $actorsSuccess = (is_string($actors) && strlen($actors)>4);
    $directorSuccess = (is_string($director) && strlen($director)>4);
    $producerSuccess = (is_string($producer) && strlen($producer)>4);
    $storyLine = (is_string($storyLine) && strlen($storyLine)>4);
    
    if ($titleSuccess && $actorsSuccess && $directorSuccess && $producerSuccess &&  $storyLine){
        try {
            $connection = new PDO('mysql:host=localhost;dbname=exercise3','root');
        } catch (PDOException $e) {
            http_response_code(500);
            echo 'A problem occured to connecting to server';
            exit(1);
        }
        $sql = "INSERT INTO movie(title, actor, director, producer, year_of_prod, lang, category, storyline) VALUES (:$title, :$actors, :$director, :$producer, :$yearOfProd, :$language, :$category, :$storyLine )";
        $statment = $connection->execute($sql);
        if (!$statement->execute()){
            echo 'insert failed';
            return ;
        }
       
        echo 'your information is saved';
        return ;
    }
}
?>

    <form class="" action="Exercise.php" method="POST">
        <input type="text" name="title" value="" placeholder="title">
        <input type="text" name="director" value="" placeholder="name of the director">
        <input type="text" name="actors" value="" placeholder="actors">
        <input type="text" name="producer" value="" placeholder="producer and synopsis">
        <select name="yearOfProd" placeholder="yearOfProd">
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
        </select>
        <select name="language" placeholder="language">
          <option value="English">English</option>
          <option value="French">French</option>
          <option value="German">German</option>
          <option value="Persian">Persian</option>
        </select>
        <select name="language" placeholder="language">
          <option value="Adventure">Adventure</option>
          <option value="Art">Art</option>
          <option value="Documentary">Documentary</option>
          <option value="Drama">Drama</option>
        </select>
    </form>
</body>
</html>