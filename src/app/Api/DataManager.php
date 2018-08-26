<?php
namespace App\Api;

/**
 * 数据员接口
 *
 *
 */
class DataManager extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'create' => array(
      
        'name'  => 'name|string|true||姓名',

        'mobile'  => 'mobile|string|true||手机号',

        'city_code'  => 'city_code|string|true||城市编码'
      
      ),

      'getList' => array(
      
        'name'  => 'name|string|false||姓名',

        'mobile'  => 'mobile|string|false||手机号',

        'city_code'  => 'city_code|string|false||城市编码',

        'page' => 'page|int|false|1|页码',

        'page_size' => 'page_size|int|false||每页条数'
      
      )
    
    ));
  
  }

  /**
   * 新增数据员
   * @desc 新增数据员
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 获取数据员列表
   * @desc 获取数据员列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
