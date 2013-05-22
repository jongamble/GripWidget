<?php
function myCrypt($foo){
  $bar = openssl_encrypt($foo,'bf-ofb','snarf');
  return $bar;
}

//$foo = 'TestingThisAlgorithm';
$foo = $_POST['before'];

$bar = myCrypt($foo);
echo json_encode($bar);
?>