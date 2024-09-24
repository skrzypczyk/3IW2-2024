<?php

session_start();

/*
class House{
    //Proprietes - Attributs
    public $wall = 4;
    private $roof = 1;
    public $window = 1;
    private $stage = 0;
    private $stairs = 0;
    public $door = 1;
    private $fundation = 1;
    public $color = "Grey";

    public function addStage()
    {
        $this->stage++;
        $this->wall+=4;
        $this->window++;
        $this->stairs++;
    }

}


echo "<pre>";
//Objet = instance d'une classe
$myGreenHouse = new House();
$myGreenHouse->color = "Green";
print_r($myGreenHouse);


$myRedHouse = new House();
$myRedHouse->color = "Red";
$myRedHouse->addStage();
$myRedHouse->addStage();
print_r($myRedHouse);
//var_dump($myRedHouse);



interface IntVehicle2Wheels
{
    public function turn(String $rightOrLeft): bool;
}

interface IntVehicle3Wheels
{
    public function turn(String $rightOrLeft): bool;
}

abstract class Vehicle
{
    public function acceleration(): void
    {
        $this->speed += $this->accelerate;
    }

    public abstract function brake(): bool;
    public function turn(String $rightOrLeft): bool
    {
        return true;
    }

}

class Moto extends Vehicle {
    protected $speed = 0;
    protected $accelerate = 4;
    public $wheel = 2;

    public function brake(): bool
    {
        $this->speed--;
        return true;
    }
}

class Car extends Vehicle {
    protected $speed = 0;
    protected $accelerate = 2;
    public $wheel = 4;

    public function brake(): bool
    {
        $this->speed-=2;
        return true;
    }
}

echo "<pre>";
$myCar = new Car();
$myCar->acceleration();
print_r($myCar);

$myMoto = new Moto();
$myMoto->acceleration();
print_r($myMoto);


*/

interface IntUser{
    public function getRole(): String;
}

class User implements IntUser
{
    protected String $firstname;
    protected String $lastname;
    protected String $email;
    protected String $password;

    /**
     * @return String
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param String $firstname
     */
    public function setFirstname(string $firstname): void
    {
        $this->firstname = ucwords(strtolower(trim($firstname)));
    }

    /**
     * @return String
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param String $lastname
     */
    public function setLastname(string $lastname): void
    {
        $this->lastname = strtoupper(trim($lastname));
    }

    /**
     * @return String
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param String $email
     */
    public function setEmail(string $email): void
    {
        $this->email = strtolower(trim($email));
    }

    /**
     * @return String
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param String $password
     */
    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    public function getRole(): String
    {
        return "Sans rôle";
    }

}

class Admin extends User{
    public function getRole(): String
    {
        return "Admin";
    }
}
class Editor extends User{
    public function getRole(): String
    {
        return "Editor";
    }
}
class SuperAdmin extends User{
    public function getRole(): String
    {
        return "Super Admin";
    }
}

class Author extends User{
    public function getRole(): String
    {
        return "Author";
    }
}

echo "<pre>";

$myUser = new SuperAdmin();
$myUser->setFirstname("    YvES   ");
$myUser->setLastname(" SKRZyPCzYK   ");
$myUser->setEmail("    Y.SKRZypczYK@gmail.COM   ");
$myUser->setPassword("Test1234");
print_r($myUser);