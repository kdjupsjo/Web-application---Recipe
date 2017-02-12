<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\Model;

/**
 * Description of userDataHolder
 *
 * @author Kristoffer
 */
class UserDataHolder {
    
    private $UserData; 
    
    public function __construct() {
        $this->UserData = array('Kristoffer'=> 'ABC123', 'Alex' => 'Nöffe', 'Admin' => 'Password'); 
    }
    public function getUserData() {
        $copy = $this->UserData;
        return $copy;
    }
    
}
