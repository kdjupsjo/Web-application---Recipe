<?php


namespace Myapp\View;
use Id1354fw\View\AbstractRequestHandler;
use MyApp\Controller\Controller;
use MyApp\Util\Constants;


//echo "Connected sucessfully";
/**
 * Description of DefaultRequestHandler
 *
 * @author Kristoffer
 */
class DefaultRequestHandler extends AbstractRequestHandler{
    
    
    protected function doExecute() {
        $this->session->restart();
        $this->session->set(Constants::CONTR_KEY_NAME, new Controller());
        $this->session->set(Constants::USER_NAME, '');
        \header('Location: /sem4/MyApp/View/Firstpage');
    }
}
