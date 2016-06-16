<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Api
 *
 * @author srturaka
 */
class HeadRun_CustomApiModule_Model_Product_Api extends Mage_Api_Model_Resource_Abstract
{
  public function items()
  {
    $arr_products=array();
    $products=Mage::getModel("catalog/product")
      ->getCollection()
      ->addAttributeToSelect('*')
      ->setOrder('entity_id', 'DESC')
      ->setPageSize(1000);
 
    foreach ($products as $product) {
      $arr_products[] = $product->toArray(array('entity_id', 'name', 'sku'));
    }
 
    return $arr_products;
  }
}