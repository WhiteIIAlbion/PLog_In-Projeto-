<?php

class User {
    //Atributos
    private $name;
    private $password;

    //Método construtor
    public function __construct($nm, $ps) {
        $this->name = $nm;
        $this->password = $ps;
    }

    //Método para validar o login
    public function login() {
        return ($this->name == "LeoADM"
            && $this->password == "1414");
    }
}