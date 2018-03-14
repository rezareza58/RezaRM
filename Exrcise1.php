
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Exercise 1</title>
</head>
<body>
<?php

$informationArray = [ 
    'FirstName' => 'value1',
    'LastName' => 'value2',
    'address' => 'value3',
    'postalCode' => 'value4',
    'city' => 'value5',
    'email' => 'value6',
    'telephone' => 'value7',
    'dateOfBirth' => 'value8'
];

?>
<ul>

<?php 
foreach ($informationArray as $key => $value){
    echo '<li>' . $key . ' - ' . $value . '</li>';
}
?>

</ul>

</body>
</html>