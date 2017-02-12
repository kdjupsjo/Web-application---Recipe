<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MyApp\Controller;
use MyApp\Model\UserDataHolder;

/**
 * Description of UserDataHolder
 *
 * @author Kristoffer
 */
class UserController {
    private $userDataholder;
    
    public function __construct() {
        $this->userDataholder = new UserDataHolder;
    }
    public function getUserData() {
        $this->userDataholder->getUserData();
    }
}
