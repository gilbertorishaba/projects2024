<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
    <form action=" index.php" method ="get">
 <label for=" username">userName</label>
 <input type=" password"name ="password"><br>

 <label for=" password">Password</label>
 <input type=" password"name="password">

 <input type=" login" value="Login">
 <?php
echo $_GET[ "username"] ."<br>";

echo $_GET[ "password"]. "<br>";


?>


     </form>
    
</body>
</html>