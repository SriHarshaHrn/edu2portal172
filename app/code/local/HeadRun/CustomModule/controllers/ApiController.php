<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ApiController
 *
 * @author srturaka
 */
class HeadRun_CustomModule_ApiController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        
        $client = new SoapClient('http://dev.sampmagento.com/api/soap/?wsdl=1');
        $session = $client->login('apiuser01', 'apiuser01123');
        $result = $client->call($session, 'product.list', array(array()));
        $client->endSession($session);
        var_dump($result);
        $this->getLayout()->getBlock('head')->setTitle("Custom API Call for product list");
    }

}
