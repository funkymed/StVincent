<?php
namespace Classes\Services;

use Classes\SingletonAbstract;
use PDO;

class Database extends SingletonAbstract {
    /**
     * @return PDO
     */
    public function getConnection()
    {
        $pdo = new PDO('mysql:host=192.168.99.100:3306;dbname=framework', 'root', 'root');
        return $pdo;
    }
}
