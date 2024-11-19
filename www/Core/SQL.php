<?php

namespace App\Core;

class SQL
{
    private $pdo;

    public function __construct(){
        try{
            $this->pdo = new \PDO("mysql:host=mariadb;dbname=esgi","esgi","esgipwd");
        }catch(\Exception $e){
            die("Erreur SQL ".$e->getMessage());
        }
    }

    public function getOneById(string $table, int $id): array
    {
        $queryPrepared = $this->pdo->prepare("SELECT * FROM ".$table." WHERE id= :id");
        $queryPrepared->execute([
            "id"=>$id
        ]);
        return $queryPrepared->fetch();
    }

}