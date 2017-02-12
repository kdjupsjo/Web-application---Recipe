<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\Controller;
use MyApp\Model\DataHolder;

/**
 * Description of Comments
 *
 * @author Kristoffer
 */
class Controller {

    private $dataHolder;

    public function __construct() {
        $this->dataHolder = new DataHolder();
    }

    public function addData($data) {
        $this->dataHolder->addData($data);
    }
    public function deleteAllData() {
        $this->dataHolder->deleteAllData();
    }

    public function getAllData() {
        return $this->dataHolder->getAllData();
    }

}
