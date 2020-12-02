<?php
class User
{

    public $id;
    public $rol;
    public $name;
    public $email;
    public $pass;

    public function __construct( $id, $rol, $name, $email, $pass)
    {
        $this->id = $id;
        $this->rol = $rol;
        $this->name = $name;
        $this->email = $email;
        $this->pass = $pass;
    }
   
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getRol()
    {
        return $this->rol;
    }

    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }


    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


    public function getPass()
    {
        return $this->pass;
    }


    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }
}
