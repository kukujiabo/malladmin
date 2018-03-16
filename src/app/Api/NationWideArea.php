<?php
namespace App\Api;

/**
 * 获取全国范围地区接口
 */
class NationWideArea extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'cascadeList' => array(

        'token' => 'token|string|true||用户令牌'
      
      ),

      'enable' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|string|true||地区id'
      
      ),

      'disable' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|string|true||地区id'
      
      )
      
    )); 
  
  }

  /**
   * 获取级联地区
   * @desc 获取级联地区
   *
   * @return array $list 地区列表
   */
  public function cascadeList() {

    $data = $this->retriveRuleParams('cascadeList');
  
    return $this->dm->cascadeList($data);
  
  }

  /** 
   * 启用地区
   * @desc 启用地区
   *
   * @return boolean true/false
   */
  public function enable() {
  
    $data = $this->retriveRuleParams('enable');

    return $this->dm->enable($data);
  
  }

  /** 
   * 禁用地区
   * @desc 禁用地区
   *
   * @return boolean true/false
   */
  public function disable() {
  
    $data = $this->retriveRuleParams('disable');

    return $this->dm->disable($data);
  
  }

}
