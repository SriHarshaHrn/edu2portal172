<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class HeadRun_CustomModule_IndexController extends Mage_Core_Controller_Front_Action {

    public function indexAction() {
        $this->loadLayout();
        $this->getLayout()->getBlock('head')->setTitle("Custom Module1");
        $this->renderLayout();
    }

}
