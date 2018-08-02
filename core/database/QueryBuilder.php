<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){

        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters)
    {

        $name = implode(', ', array_keys($parameters));

        $names = ':' . implode(', :', array_keys($parameters));

        $sql = "INSERT INTO {$table} ($name) VALUES ($names)";

        //$sql = sprintf('insert into %s (%s) values (%s)',
            //$table,
            //implode(', ', array_keys($parameters)),
            //':' . implode(', :', array_keys($parameters))
            //);

        //die(var_dump($sql));

        try {

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);

        } catch (Exception $e) {

            die('Whoops, something went wrong.');

        }

    }
}