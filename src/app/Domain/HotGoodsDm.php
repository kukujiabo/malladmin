<?php
namespace App\Domain;

class HotGoodsDm {

  public function create($data) {
  
    return \App\request('App.HotGoods.Create', $data);
  
  }

  public function getList() {
  
    return \App\request('App.HotGoods.GetList', $data);
  
  }

}
