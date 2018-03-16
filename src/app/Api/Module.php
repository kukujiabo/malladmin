<?php
namespace App\Api;

/**
 * 系统模块接口
 * 
 * @author Meroc Chen <398515393@qq.com> 2018-02-13
 */
class Module extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'getList' => array(
      
        'token'  => 'token|string|true||用户令牌'

      ),

      'show' => array(
      
        'token'  => 'token|string|true||用户令牌',

        'id' => 'id|int|true||模块id'
      
      ),

      'hide' => array(
      
        'token'  => 'token|string|true||用户令牌',

        'id' => 'id|int|true||模块id'
      
      )
    
    ));
  
  }

  /**
   * 获取列表
   * @desc 获取列表
   *
   * @return array 
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  public function show() {
  
    return $this->dm->show($this->retriveRuleParams(__FUNCTION__)); 
  }

  public function hide() {
  
    return $this->dm->hide($this->retriveRuleParams(__FUNCTION__));
  
  }

}
