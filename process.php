<?php
$json =file_get_contents('users.json');
$userJson =json_decode($json,true);
 
$user = $_POST['userName'];
$password =$_POST['userPassword'];

if(array_key_exists($user, $userJson)&& $userJson[$user]==$password)
 {
     echo "Welcome $user";
}
else
{
    echo "Wrong user name or password";
}
?>