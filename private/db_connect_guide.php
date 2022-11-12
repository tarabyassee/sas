<?php

// This guide demonstrates the five fundamental steps
// of database interaction using PHP.

// Credentials
$dbhost = 'localhost';
$dbuser = 'sally';
$dbpass = 'somepa55word';
$dbname = 'salamanders';

// Credentials Siteground
//$dbhost = 'siteground';
//$dbuser = 'uzsgtnracggz5';
//$dbpass = '$allythe$alamander';
//$dbname = 'dbvpzgcjlbkwgm';

// 1. Create a database connection
$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// 2. Perform database query
$query = "SELECT * FROM subjects";
$result_set = mysqli_query($connection, $query);
// 3. Use returned data (if any)
while($subject = mysqli_fetch_assoc($result_set)) {
  echo $subject["salamanderName"] . <br>;
}

// 4. Release returned data
mysqli_free_result($result_set);
// 5. Close database connection
mysqli_close($connection);

?>
