<?php

//Importando arquivo de dados
require_once "./database.php";


class User {
    //Atributos
    private $user;
    private $pass;
    private $photo;
    private $birth;
    private $first_name;
    private $last_name;
    private $desc;
    private $cep;
    private $address;
    private $number;
    private $complement;
    private $neighborhood;
    private $city;
    private $state;
    private $sex;
    private $phone;
    private $email;
    private $notify;
    private $actual_pass;
    private $new_pass;
    private $confirm_pass;
    


    //Método construtor
    public function __construct($n, $p) {
        $this->user = $n;
        $this->pass = $p;   
    }

    //Método para validar o login
    public function login() {
        global $database;
        $check = false;

        foreach($database as $k => $v) {

            if($this -> user == $v["user"]){

                if($this -> pass == $v["pass"]){
                    $check = true;
                    

                } 

            }

        }

        return $check;
        
    }

    /**
     * Get the value of user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     */
    public function setUser($user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of pass
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set the value of pass
     */
    public function setPass($pass): self
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get the value of photo
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     */
    public function setPhoto($photo): self
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of birth
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * Set the value of birth
     */
    public function setBirth($birth): self
    {
        $this->birth = $birth;

        return $this;
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($first_name): self
    {
        $this->first_name = $first_name;

        return $this;
    }

    /**
     * Get the value of last_name
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     */
    public function setLastName($last_name): self
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of desc
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set the value of desc
     */
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get the value of cep
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set the value of cep
     */
    public function setCep($cep): self
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get the value of address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of complement
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * Set the value of complement
     */
    public function setComplement($complement): self
    {
        $this->complement = $complement;

        return $this;
    }

    /**
     * Get the value of neighborhood
     */
    public function getNeighborhood()
    {
        return $this->neighborhood;
    }

    /**
     * Set the value of neighborhood
     */
    public function setNeighborhood($neighborhood): self
    {
        $this->neighborhood = $neighborhood;

        return $this;
    }

    /**
     * Get the value of city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     */
    public function setCity($city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     */
    public function setState($state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get the value of sex
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     */
    public function setSex($sex): self
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     */
    public function setPhone($phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of notify
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set the value of notify
     */
    public function setNotify($notify): self
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * Get the value of actual_pass
     */
    public function getActualPass()
    {
        return $this->actual_pass;
    }

    /**
     * Set the value of actual_pass
     */
    public function setActualPass($actual_pass): self
    {
        $this->actual_pass = $actual_pass;

        return $this;
    }

    /**
     * Get the value of new_pass
     */
    public function getNewPass()
    {
        return $this->new_pass;
    }

    /**
     * Set the value of new_pass
     */
    public function setNewPass($new_pass): self
    {
        $this->new_pass = $new_pass;

        return $this;
    }

    /**
     * Get the value of confirm_pass
     */
    public function getConfirmPass()
    {
        return $this->confirm_pass;
    }

    /**
     * Set the value of confirm_pass
     */
    public function setConfirmPass($confirm_pass): self
    {
        $this->confirm_pass = $confirm_pass;

        return $this;
    }
}