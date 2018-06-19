<?php
namespace App\Domain;

class OrderTakeOutGoodsDm {

  public function getAll($params) {
  
    return \App\request('App.OrderTakeOutGoods.GetAll', $params); 
  
  }

}
