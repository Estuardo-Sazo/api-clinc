<?php

//Incluimos el dao encargao de hacer el CRUD de usuaios
include_once('../controllers/users.controller.php');
$user =new DaoUser;
///Get requests
//echo 'Informacion: '. file_get_contents('php://input');

// Estabablecmos el modo de respuesta de tipo JSON
 header("Content-type: application/json");


switch ($_SERVER['REQUEST_METHOD']) {// Evaluamos el modo de request si es GET, POST, PUT, DELETE
    case 'GET':
        if(isset($_GET['id'])){// Evaluamos si viene parametro id para consulta de un usuario
            
            $param=$_GET['id'];
            echo 'method Get id: '.$param;
        }else{
            echo json_encode($user->getUsers());
        }
               
        break;

    case 'POST':
        $_POST= json_decode(file_get_contents('php://input'),true); // Almacenamos las respuesta de app cliente
        $user->addUser($_POST['rol'],$_POST['name'],$_POST['email'],$_POST['pass']);
        $result['message']="Register Success user: ". $_POST['name'];

        echo json_encode($result); 

        break;
    case 'DELETE':
        if(isset($_GET['id'])){
            $param=$_GET['id'];
            echo 'method DELETE id: '.$param;
        }else{
            echo ' Need Id';
        }
        break;    
    case 'PUT':
        $param=$_GET['id'];
        $_PUT= json_decode(file_get_contents('php://input'),true);
        echo 'Of id: '.$param;
        echo ' <br> Update: '. json_encode($_PUT);
        break;    
}
/// Create user :User

/// Get user :id

/// Get users

/// Update user

/// Delete user