<?php header('Access-Control-Allow-Origin: *');

$myarray = array("Basketball", "Programming", "Videogames");

$myJSON = json_encode($myarray);

echo $myJSON;
?>