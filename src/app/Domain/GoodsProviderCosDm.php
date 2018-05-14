<?php
namespace App\Domain;

class GoodsProviderCosDm {

  public function addGoodsCos($params) {
  
    return \App\request('App.GoodsProviderCos.AddGoodsCos', $params); 
  
  }

  public function getList($params) {
  
    return \App\request('App.GoodsProviderCos.GetList', $params);
  
  }

  public function getDetail($params) {
  
    return \App\request('App.GoodsProviderCos.GetDetail', $params);
  
  }

}
