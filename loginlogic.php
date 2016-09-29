<?php
session_start();
 	require_once('dbcon.php');


	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) or die('Missing or illegal age parameter');
	$password = filter_input(INPUT_POST, 'password') or die('Missing or illegal parameter'); 
	
	//echo $email;
	//echo $name;
	//echo $sql;

   $sql = "SELECT id, password FROM user where email=?";
	
	$stmt = $link->prepare($sql);
    
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $stmt->bind_result($id, $phash);
    if($stmt->fetch()){   
        echo $id.'('.$email.') : '.$phash.'<br />';	
  }
  	// validate login
  	// $pw: 'SuperSecret'; // from login form
  	// password_verify() er en indbygget php funktion som tager 2 parametre og matcher dem. De 2 string parametre evaluere $password som er input fra form og $phash som er det hashet password i db og evaluere om log in matcher. 
  	//echo password_verify($password,$phash) ? 'succes': 'fail'; //ternary operator
   if(password_verify($password,$phash)){
   		$_SESSION['uid'] = $id;

   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
if (isset($_SESSION['uid'])) {
	echo 'log in success';
}
else {
	echo 'log in fail';
}
?>

<a href="restricted.php">Hemmelig info</a>
</body>
</html>
