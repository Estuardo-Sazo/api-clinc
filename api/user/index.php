<?php


///Get requests

//echo 'Informacion: '. file_get_contents('php://input');
    header("Content-type: application/json");
switch ($_SERVER['REQUEST_METHOD']) {
    case 'GET':
        if(isset($_GET['id'])){
            $param=$_GET['id'];
            echo 'method Get id: '.$param;
        }else{
            echo ' Get Users';
        }
               
        break;

    case 'POST':
        $_POST= json_decode(file_get_contents('php://input'),true);

        $result['message']=$_POST;

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