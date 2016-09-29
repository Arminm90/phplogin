 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>login</title>
 </head>
 <body>
 <form action="loginlogic.php" method="post">
Email
<input type="email" name="email" required><br>
Password
<input type="password" name="password" required><br>
Submit
<input type="submit" name="submitReg" value="Log in">
</form>
<form method="get" action="createuserform.php">
    <button type="submit">Create User</button>
</form>
 </body>
 </html>