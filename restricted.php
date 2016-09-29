<?php 

session_start();

//echo session_id();    	   
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Restricted</title>
</head>
<body>


<?php if(isset($_SESSION['uid'])){ ?>
Dette er hemmeligt...
	<a href="logout.php">logout</a>
<?php }else{ ?>

Desværre - du skal logge ind for at få adgang!!!


<?php } ?>

</body>
</html>