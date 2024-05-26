<?php

class Conexion {

    private $con;

    public function __construct() {
        $this->con = mysqli_connect('localhost','root','1805162433','universidad');
    }

    public function testConnection(){

        if(!$this->con){
            print_r('Error'.mysqli_connect_error());
        }else{
            print_r('Se conecto');
        }
    }
}

?>