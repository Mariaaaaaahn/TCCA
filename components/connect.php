<?php

$db_host = 'localhost';
$db_port = '3307';
$db_name = 'reviews_db';
$db_user_name = 'root';
$db_user_pass = '';

$conn = new PDO("mysql:host=$db_host;port=$db_port;dbname=$db_name", $db_user_name, $db_user_pass);

function create_unique_id(){
   $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
   $characters_lenght = strlen($characters);
   $random_string = '';
   for($i = 0; $i < 20; $i++){
      $random_string .= $characters[mt_rand(0, $characters_lenght - 1)];
   }
   return $random_string;
}

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>
