<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     include "controllers/users.controller.php";

     $user =new DaoUser;
     $user->addUser(2,'Mario Lopez','mario@eje.com','sdlps45d4s45');
     echo json_encode($user->getUsers());



?>
</body>
</html>



<!-- MOdificacion Developer PC -->