<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Myapp\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Description of MainSite
 *
 * @author Kristoffer
 */
class FrontPage extends AbstractRequestHandler{
    protected function doExecute() {
        return 'Frontpage';
    } 
}
