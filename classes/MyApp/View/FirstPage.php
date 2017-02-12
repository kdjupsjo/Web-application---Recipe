<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Myapp\View;
use Id1354fw\View\AbstractRequestHandler;
use MyApp\Integration\CommentDAO;

/**
 * Description of FirstPage
 *Show index page of application
 * @author Kristoffer
 */
class FirstPage extends AbstractRequestHandler {
         
    private $data;
    private $name;
    private $comment;
    private $commenthandler;
    

    public function setName($name){ }
    public function setComment($comment) {   }
	
    protected function doExecute() {
        return 'Index';
    }
}
