<?php

namespace Core\database;

use PDO;
use Exception;

/**
 * Class QueryBuilder
 * @package Core\database
 */
class QueryBuilder
{
    protected $pdo;

    /**
     * QueryBuilder constructor.
     * @param $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * @param $table
     * @return mixed
     */
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * @param $table
     * @param $parameters
     */
    public function insert($table, $parameters)
    {
        $name = implode(', ', array_keys($parameters));

        $names = ':' . implode(', :', array_keys($parameters));

        $sql = "INSERT INTO {$table} ($name) VALUES ($names)";

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die('Whoops, something went wrong.');

        }
    }

    /**
     * @param $column
     * @param $email
     */
    public function login($column, $email)
    {
        try {
            $query = $this->pdo->prepare("SELECT id,email,password FROM users WHERE {$column}=:email");
            $row = $this->pdo->prepare("SELECT id,email,password FROM users WHERE {$column}=:email");
            $query->bindParam(':email', $email);
            $row->bindParam(':email', $email);
            $query->execute();
            $row->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);

            if ($row->fetchColumn() > 0 && password_verify($_POST['pass'], $results['password'])) {

                $_SESSION['login'] = $results['email'];
                header("Location: /");

            } else {

                die('Sorry, those credentials do not match');

            }
        } catch (Exception $e) {

            die('Whoops, something went wrong.');

        }
    }

    /**
     * @param $table
     * @param $col
     * @param $search
     * @return mixed
     */
    public function searchField($table,$col,$search)
    {
            $statement = $this->pdo->prepare("SELECT * FROM {$table} WHERE {$col} LIKE :keyword ORDER BY id DESC");
            $statement->bindValue(':keyword', '%' . $search . '%', PDO::PARAM_STR);
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}