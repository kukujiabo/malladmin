<?php
namespace App\Api;

/**
 * 智能下单模版接口
 *
 *
 */
class SmartTemplate extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      '*' => array(

        'token' => 'token|string|true||用户令牌'
      
      ),
    
      'create' => array(

        'template_name' => 'template_name|string|true||模版名称',
      
        'layout_ids' => 'layout_ids|string|true||布局id',

        'min_measure' => 'min_measure|int|true||最小面积',

        'max_measure' => 'max_measure|int|true||最大面积',

        'goods' => 'goods|string|true||商品'
      
      ),

      'getList' => array(
      
        'template_name' => 'template_name|string|true||模版名称',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false||每页条数',
      
      ),

      'getDetail' => array(
      
        'id' => 'id|int|true||id'
      
      ),

      'updateTemplate' => array(
      
        'id' => 'id|int|true||id',
      
        'template_name' => 'template_name|string|true||模版名称',
      
        'layout_ids' => 'layout_ids|string|true||布局id',

        'min_measure' => 'min_measure|int|true||最小面积',

        'max_measure' => 'max_measure|int|true||最大面积',

        'goods' => 'goods|string|true||商品'
      
      )
    
    )); 
  
  }

  /**
   * 新建模版
   * @desc 新建模版
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 获取详情
   * @desc 获取详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 更新模版
   * @desc 更新模版
   *
   * @return int num
   */
  public function updateTemplate() {
  
    return $this->dm->updateTemplate($this->retriveRuleParams(__FUNCTION__));
  
  }

}
