<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $host = "db.3wa.io";
        $port = "3306";
        $dbname = "maridoucet_bre02_distorsion";
        $connexionString = "mysql:host=$host;port=$port;dbname=$dbname";

        $user = "maridoucet";
        $password = "61ab3719de839ac5e5c9b57377e5e2d5";

        $this->db = new PDO(
            $connexionString,
            $user,
            $password
        );
    }


}