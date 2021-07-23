<?php

class SQLConnection extends PDO {
    
    public function __construct(string $host, string $database, string $username, string $password)
    {
        parent::__construct("mysql:host=$host;dbname=$database", $username, $password);
    }

    public function getArticles() {
        $query = $this->prepare("SELECT * FROM articles");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function getLinks() {
        $query = $this->prepare("SELECT * FROM links");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function getUsers() {
        $query = $this->prepare("SELECT * FROM users");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function preint($data) {
        echo "<pre>";
        echo var_dump($data);
        echo "</pre>";
    }
}