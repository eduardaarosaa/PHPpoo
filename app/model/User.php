<?php

class User{
    
    private $id;
    private $firstName;
    private $lastName;
    private $age;
    private $gender;

    function ImprimeDados()
    {
        echo "Nome: {$this->firstName}<br>";
        echo "Sobrenome: {$this->lastName}<br>";
    }
    function getId() {
        return $this->id;
    }

    function getFirstName() {
        return $this->firstName;
    }

    function getLastName() {
        return $this->lastName;
    }

    function getAge() {
        return $this->age;
    }

    function getGender() {
        return $this->gender;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    function setAge($age) {
        $this->age = $age;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }


    
}