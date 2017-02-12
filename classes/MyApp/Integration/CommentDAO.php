<?php

namespace MyApp\Integration;

use MyApp\Model\Comments;
use MyApp\Util\Constants;

class CommentDAO {
    const DB_NAME = 'dataBaseTest';
    private $commentDb;

    public function __construct() {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->commentDb = new \mysqli('localhost', Constants::USER_DBNAME, Constants::DBPASSWORD, self::DB_NAME);
    }

    public function __destruct() {
        $this->commentDb->close();
    }
    public function insertComment($name, $comment) {
     $sql = <<<SQL
        INSERT INTO `Comments`(`name`, `Comment`) 
        VALUES ('$name', '$comment')
SQL;
    
     $this->commentDb->query($sql);
    }
    public function oneComments() {
        $sql = <<<SQL
        SELECT * 
        FROM `Comments`
        WHERE `name` = 'Alex'
SQL;
       
        if(!$result = $this->commentDb->query($sql)){
            die('There was an error running the query [' . $this->commentDb->error . ']');
        } 
        
        $row = $result->fetch_assoc();
        $comments = new Comments($row['name'], $row['Comment']); 

        return $comments;   
    }
    public function deleteComment($name) {
        $sql = <<<SQL
        DELETE 
        FROM `Comments`
        WHERE `name` = ('$name')
SQL;
        $this->commentDb->query($sql);
    }
        
    public function allComments() {
        
        $comments = array();
        $sql = <<<SQL
        SELECT * 
        FROM `Comments`
SQL;
        
        if(!$result = $this->commentDb->query($sql)){
            die('There was an error running the query [' . $this->commentDb->error . ']');
        } 
        
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        
        foreach ($rows as $row) {
            
            $comments[] = new Comments($row['name'], $row['Comment']); 
        }
        return $comments;   
    }

}