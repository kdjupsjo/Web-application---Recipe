<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Myapp\View;
use Id1354fw\View\AbstractRequestHandler;
use MyApp\Util\Constants;

/**
 * Description of MainSite
 *
 * @author Kristoffer
 */
class Comments extends AbstractRequestHandler{
    private $theData;
    private $handler;
    
    public function setTheData($theData){
        $this->theData = $theData; 
    }
    public function setCommentSubmit() {
        $this->handler = true; 
    }
    public function setDeleteComment() {
        $this->handler = false;
    }
    protected function doExecute() {
        $contr = $this->session->get(Constants::CONTR_KEY_NAME);
        if ($this->handler == true) {
            $contr->addData($this->theData);
        } else if ($this->handler == false ) {
            $contr->deleteAllData();
        }
        
        $this->addVariable('allData', $contr->getAllData());
        
        $this->session->set(Constants::CONTR_KEY_NAME, $contr);
        return 'Frontpage';
    } 
}
