<?php
namespace App\Domain;

/**
 * 商品价格体系`:
 */
class GoodsPriceMapDm {

  public function addRules($params) {
  
    return \App\request('App.GoodsPriceMap.AddRule', $params);
  
  }

  public function getList($params) {
  
    return \App\request('App.GoodsPriceMap.GetList', $params);
  
  }

  public function edit($params) {
  
    return \App\request('App.GoodsPriceMap.Edit', $params);
  
  }

  public function batchEdit($params) {
  
    return \App\request('App.GoodsPriceMap.BatchEdit', $params);
  
  }

  public function remove($params) {
  
    return \App\request('App.GoodsPriceMap.Remove', $params);
  
  }

  public function syncSkuPriceByGoodsId($params) {
  
    return \App\request('App.GoodsPriceMap.SyncSkuPriceByGoodsId', $params);
  
  }

  public function removeAllPriceItem($params) {
  
    return \App\request('App.GoodsPriceMap.RemoveAllPriceItem', $params);
  
  }

}
