
<?php





echo "This is our first class on php!";

echo "<h1>This is our first class on php!</h1>";


?>


<?php

$x = 10;

$y = 20;


$result = $x+$y;

 echo "The result is=" .$result;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-01</title>
</head>
<body>
    
<h1>This is our first class on php</h1>

<p>This is p tag!</p>

<a href="contact.php">Contact Page</a>



<?php

echo "<p>This is p tag from php block</p>";

$indexArray = [50, 65, 78, 90, 20];

// echo $indexArray[0]."<br>";
// echo $indexArray[1]."<br>";
// echo $indexArray[2]."<br>";
// echo $indexArray[3]."<br>";
// echo $indexArray[4]."<br>";

for( $i=0; $i<5; $i++){

    echo $indexArray[$i]."<br>";
}




?>



</body>
</html>





