
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercise 1</title>
</head>
<body>
<?php

function convert($euro, $dollar) {
    
    if (isset($euro) && ((is_int($euro) || is_float($euro)))){
        $resultDollar = $euro*1.085965;
        $result = $euro . '=' . $resultDollar . 'US dollars' ;
        echo $result;
        
    } elseif (isset($dollar) && ((is_int($dollar) || is_float($dollar)))){
        $resultEuro = ($dollar * 0.920839);
        $result = $dollar . '=' . $resultEuro . 'Euro';
    	echo $result ;
    }
    return '<p>' . $result . '</p>';
}

?>
	<form class="" action="Exercise2.php" method="post">
        <input type="number" name="euro" value="">
        <input type="number" name="dollar" value="">
        <button type="button" name="button">calculate</button>
    </form>

</body>
</html>