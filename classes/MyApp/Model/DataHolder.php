<?php

namespace MyApp\Model;

/**
 * Description of Comments
 *
 * @author Kristoffer
 */
class DataHolder {
    private $allData;
    
    public function __construct() {
        $this->allData = array();
    }
    
    public function addData($data) {
        $this->allData[] = $data;
    }
    
    public function deleteAllData() {
        $this->allData = array();
    }
    public function getAllData() {
        $copy = $this->allData;
        return $copy;
    }
}

