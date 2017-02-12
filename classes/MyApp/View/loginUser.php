<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Myapp\View;
use Id1354fw\View\AbstractRequestHandler;
use MyApp\Util\Constants;
use MyApp\Controller\UserController;
use MyApp\Integration\PersonDAO;
use MyApp\Model\Person;
/**
 * Description of loginUser
 *
 * @author Kristoffer
 */
function establishConnection() {
    return new PersonDAO();
}
    

class loginUser extends AbstractRequestHandler {
    private $userName;
    private $password; 
    
    public function setUserName($userName){
        $this->userName = $userName;
    }
    public function setPassword($password){
        $this->password = $password; 
    }
    public function setLoginButton(){} 
    
    protected function doExecute() {                
        $login = establishConnection();
        $loginAttempt = $login->selelectPerson($this->userName);
        $userAttempt = $loginAttempt->getName();

        if($userAttempt) {

            if(password_verify($this->password, $loginAttempt->getPassword())) {
                $this->session->set(Constants::USER_NAME, $userAttempt);
                return FrontPage; 
            }
            echo 'WRONG PASSWORD';
            return index;
        } 
        echo "USERNAME DOESN'T EXIST";
        return index;
        
    }
}
