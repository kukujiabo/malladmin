<?php
namespace App\Api;

class SalesBind extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addBindings' => array(
      
        'token' => 'token|string|true||用户令牌',

        'account' => 'account|string|true||账号',
      
        'mobiles' => 'mobiles|string|true||手机号'
      
      ),

      'unbind' => array(
      
        'token' => 'token|string|true||用户令牌',

        'account' => 'account|string|true||账号',
      
        'sales_phone' => 'sales_phone|string|true||手机号'
      
      )
    
    ));
  
  }

  /**
   * 绑定业务员
   * @desc 绑定业务员
   *
   * @return array
   */
  public function addBindings() {
  
    return $this->dm->addBindings($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 解绑业务员
   * @desc 解绑业务员
   *
   * @return array
   */
  public function unbind() {
  
    return $this->dm->unbind($this->retriveRuleParams(__FUNCTION__));
  
  }

}
