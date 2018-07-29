<?php
namespace App\Api;

/**
 * 送货员接口
 *
 */
class Driver extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'create' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'account' => 'account|string|true||司机账号',
        'name' => 'name|string|true||司机姓名',
        'password' => 'password|string|true||密码',
        'city_code' => 'city_code|string|true||城市代码',
        'remark' => 'remark|string|false||备注'
      
      ),

      'getList' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'account' => 'account|string|false||手机号',
        'name' => 'name|string|false||司机名称',
        'city_code' => 'city_code|string|false||城市代码',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      )
    
    )); 
  
  }

  /**
   * 新增司机账号
   * @desc 新增司机账号
   *
   * @return
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
