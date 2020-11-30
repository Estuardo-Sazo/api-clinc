<?php

include "base.connect.php";


class DaoUser extends Base{

    // function get users

    public function getUsers(){
        $sql= "SELECT * FROM tt_users";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()){
            return $result;
        }
    }

    // function get user

    public function getUser($email){
        $sql= "SELECT * FROM tt_users WHERE EMAIL=?";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        while($result = $stmt->fetchAll()){
            return $result;
        }
    }
    // function add user
    public function addUser($rol,$name,$email,$pwd){
        $sql= "INSERT INTO tt_users(ID_ROL,NAME,EMAIL,PASS) VALUES (?,?,?,?)";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$rol,$name,$email,$pwd]);
    }
}