<?php

namespace MyApp\Model; 

class Comments {
    
    private $name; 
    private $comment;
    
    public function __construct($name, $comment) {
        $this->name = $name;
        $this->comment = $comment; 
    }
    
    public function getName() {
        return $this->name; 
    }
    
    public function getComment() {
        return $this->comment; 
    }
    
    
}
