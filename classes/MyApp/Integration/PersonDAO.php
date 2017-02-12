<?php

namespace MyApp\Integration;

use MyApp\Model\Person;
use MyApp\Util\Constants;

class PersonDAO {
    const DB_NAME = 'dataBaseTest';
    private $personDb;

    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->personDb = new \mysqli('localhost', Constants::USER_DBNAME, Constants::DBPASSWORD, self::DB_NAME);
    }

    public function __destruct() {
        $this->personDb->close();
    }

    public function selelectPerson($name) {
        $name = mysqli_real_escape_string($this->personDb, $name);
        
        $sql = <<<SQL
        SELECT * 
        FROM `test`
        WHERE `name` = '$name'
SQL;

        if(!$result = $this->personDb->query($sql)){
            die('There was an error running the query [' . $this->personDb->error . ']');
        } 
        
        $row = $result->fetch_assoc();
        $person = new Person($row['name'], $row['password']); 
        return $person;
       
    }

}