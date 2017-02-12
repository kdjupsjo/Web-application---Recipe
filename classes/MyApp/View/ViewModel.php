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
 * Description of viewModel
 *
 * @author Kristoffer
 */
function establishConnection () {
    return new CommentDAO();
}
class ViewModel extends AbstractRequestHandler {
    

    private $name;
    private $comment;
    private $commenthandler;


    public function setName($name) {
        $this->name = $name;
    }
    public function setComment($comment) {
        $this->comment = $comment;
    }
    public function setCommentSubmit() {}
    
    protected function doExecute() {
        $this->commentHandler = establishConnection();
        $this->commentHandler->insertComment($this->name, $this->comment);
    }
    
}
