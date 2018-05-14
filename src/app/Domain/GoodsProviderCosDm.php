<?php
namespace App\Domain;

class GoodsProviderCosDm {

  public function addGoodsCos($params) {
  
    return \App\request('App.GoodsProviderCos.AddGoodsCos', $params); 
  
  }

}
