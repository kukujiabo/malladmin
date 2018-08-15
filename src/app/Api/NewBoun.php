<?php
namespace App\Api;

class NewBoun extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      '*' => array(

        'token' => 'token|string|true||用户令牌'
      
      ),
    
      'create' => array(
      
        'coupons' => 'coupons|string|true||优惠券信息'
      
      ),

      'getAll' => array(
      
      
      
      )
    
    )); 
  
  }

  /**
   * 添加礼包券
   * @desc 添加礼包券
   *
   * @return int num
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 获取全部
   * @desc 获取全部
   *
   * @return array data
   */
  public function getAll() {
  
    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));
  
  }

}
