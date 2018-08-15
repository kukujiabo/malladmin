<?php
namespace App\Api;

/**
 * 新人礼包接口
 *
 */
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
      
      
      
      ),

      'removeBoun' => array(
      
        'id' => 'id|int|true||删除礼包优惠券'
      
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

  /**
   * 删除礼包优惠券
   * @desc 删除礼包优惠券
   *
   * @return int num
   */
  public function removeBoun() {
  
    return $this->dm->removeBoun($this->retriveRuleParams(__FUNCTION__)); 
    
  }

}
