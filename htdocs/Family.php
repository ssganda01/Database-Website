<?php header('Access-Control-Allow-Origin: *');

$myarray = array (
  'father' => 
  array (
    'name' => 'Bob Ross',
    'age' => '50',
    'dob' => '1971',
  ),
  'mother' => 
  array (
    'name' => 'Mom Ross',
    'age' => '46',
    'dob' => '1975',
  ),
  'sister' => 
  array (
    'name' => 'Sis Ross',
    'age' => '20',
    'dob' => '2001',
  ),
  'me' => 
  array (
    'name' => 'Subeig Ganda',
    'age' => '16',
    'dob' => '2004',
  )
);

$myJSON = json_encode($myarray);

echo $myJSON;
?>