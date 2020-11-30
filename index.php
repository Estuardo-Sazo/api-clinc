<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     include_once('models/user.model.php');

     $objeto =new User('1','1','Jaime Sazo','eje@eje.com','5fd85d5sa6s5dw6d9a');

     echo "<h1>".$objeto->getName()."</h1>";
     echo "<h1>".$objeto->getEmail()."</h1>";


?>
</body>
</html>



<!-- MOdificacion Developer PC -->