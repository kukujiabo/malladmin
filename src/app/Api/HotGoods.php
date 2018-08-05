<?php
namespace App\Api;

/**
 * 爆款商品接口
 * @desc 爆款商品接口
 *
 */
class HotGoods extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'create' => array(

        'token' => 'token|string|true||管理员令牌',

        'goods_id' => 'goods_id|int|true||商品id',

        'city_code' => 'city_code|int|true||城市编码'
      
      ),

      'getList' => array(
      
        'city_code' => 'city_code|int|false||城市编码',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      )
    
    ));
  
  }

  /**
   * 新增爆款商品
   * @desc 新增爆款商品
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 爆款商品列表
   * @desc 爆款商品列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
