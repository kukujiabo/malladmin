<?php namespace App\Api;

/**
 * 供应商商品进价接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class GoodsProviderCos extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addGoodsCos' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'goods_id' => 'goods_id|int|true||商品id',
        'provider_id' => 'provider_id|int|true||供应商id',
        'cost' => 'cost|float|true||商品进价',
        'goods_name' => 'goods_name|string|true||商品skuid',
        'skus' => 'skus|string|true||商品规格'
      
      )
    
    ));
  
  }

  /**
   * 新增商品
   *
   */
  public function addGoodsCos() {
  
    return $this->dm->addGoodsCos($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
