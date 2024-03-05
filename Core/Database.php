<?php

namespace Core;

use PDO;

class Database
{
    public $pdo;
    private $statment;
    private bool $executeResult;

    public function __construct($config, $username = "root", $password = "")
    {
        $dsn = "mysql:" . http_build_query($config, "", ";");
        try {
            $this->pdo = new PDO($dsn, $username, $password, [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        } catch (PDOException $e) {
            dd($e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $this->statment = $this->pdo->prepare($query);
        $this->executeResult = $this->statment->execute($params);
        return $this;
    }

    public function find()
    {
        return $this->statment->fetchAll();
    }

    public function findOne()
    {
        return $this->statment->fetch();
    }

    public function findOneOrFail()
    {
        $result = $this->findOne();
        if (!$result) {
            abort();
        }
        return $result;
    }

    public function deleteOrFail()
    {
        $result = (bool)$this->statment->rowCount();
        if (!$this->executeResult) {
            abort(Response::SERVER_ERROR);
        } elseif (!$result) {
            abort(Response::FORBIDDEN);
        }

        return $result;
    }
}
