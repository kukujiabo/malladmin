<?php
namespace App\Domain;

class HotGoodsDm {

  public function create($data) {
  
    return \App\request('App.HotGoods.Create', $data);
  
  }

  public function getList($data) {
  
    return \App\request('App.HotGoods.GetList', $data);
  
  }

  public function remove($data) {
  
    return \App\request('App.HotGoods.Remove', $data);
  
  }

}
