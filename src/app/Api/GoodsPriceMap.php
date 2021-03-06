<?php
namespace App\Api;

/**
 * 商品价格体系接口
 *
 * @author 
 */
class GoodsPriceMap extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addRules' => array(

        'token' => 'token|string|true||用户令牌',
      
        'goods_id' => 'goods_id|int|true||商品id',

        'user_level' => 'user_level|int|true||用户等级',

        'level_name' => 'level_name|string|true||等级名称',

        'city_code' => 'city_code|int|true||城市编码',

        'city_name' => 'city_name|string|true||城市名称',

        'price' => 'price|float|true||商品价格',

        'skus' => 'skus|string|true||商品sku',

        'goods_name' => 'goods_name|string|true||商品名称',

        'tax_off_price' => 'tax_off_price|float|false||含税价格'

      
      ),

      'getDetail' => array(

        'token' => 'token|string|true||用户令牌',
      
        'id' => 'id|int|true||商品价格id'
      
      ),

      'getList' => array(

        'token' => 'token|string|true||用户令牌',
      
        'goods_name' => 'goods_name|string|false||商品名称',

        'sku_name' => 'sku_name|string|false||sku名称',

        'goods_id' => 'goods_id|int|false||商品id',

        'city_code' => 'city_code|string|false||城市编码',

        'order' => 'order|string|false||排序',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false|20|每页条数'
      
      ),

      'edit' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|int|true||价格id',

        'price' => 'price|float|false||价格',

        'tax_off_price' => 'tax_off_price|float|false||含税价格'
      
      ),

      'batchEdit' => array(
      
        'token' => 'token|string|true||用户令牌',

        'data' => 'data|string|true||数据'
      
      ),

      'remove' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|int|true||价格id'
      
      ),

      'syncSkuPriceByGoodsId' => array(
      
        'token' => 'token|string|true||用户令牌',

        'goods_id' => 'goods_id|int|true||商品id'
      
      ),

      'removeAllPriceItem' => array(
      
        'token' => 'token|string|true||用户令牌',

        'ids' => 'ids|string|true||商品id'
      
      )
    
    ));
  
  }

  /**
   * 添加规则
   * @desc 添加规则
   *
   * @return
   */
  public function addRules() {
  
    return $this->dm->addRules($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 获取列表
   * @desc 获取列表
   *
   * @return
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 编辑价格
   * @desc 编辑价格
   *
   * @return int num
   */
  public function edit() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询单条价格详情
   */
  public function getDetail() {
  
  
  }

  /**
   * 删除价格
   * @desc 删除价格
   *
   * @return int num
   */
  public function remove() {
  
    return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 批量修改价格
   * @desc 批量修改价格
   *
   * @return
   */
  public function batchEdit() {
  
    return $this->dm->batchEdit($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 新增sku价格商品id
   * @desc 新增sku价格商品id
   *
   * @return
   */
  public function syncSkuPriceByGoodsId() {
    
    return $this->dm->syncSkuPriceByGoodsId($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除选中价格
   * @desc 删除选中价格
   *
   * @return int num
   */
  public function removeAllPriceItem() {
  
    return $this->dm->removeAllPriceItem($this->retriveRuleParams(__FUNCTION__));
  
  }

}
