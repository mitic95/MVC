<?php

namespace Core\database;

use PDO;
use PDOException;

/**
 * Class Connection
 * @package Core\database
 */
class Connection
{
    /**
     * @param $config
     * @return PDO
     */
    public static function make($config)
    {
        try {

            return new PDO(

                $config['connection'].';dbname='.$config['name'],

                $config['username'],

                $config['password'],

                $config['options']

            );

        } catch (PDOException $e){

            throw new PDOException($e);

        }
    }
}