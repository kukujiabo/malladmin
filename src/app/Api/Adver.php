<?php
namespace App\Api;

/**
 * 广告位接口
 *
 */
class Adver extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'save' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|int|true||广告id',

        'object_id' => 'object_id|int|false||关联对象id',

        'img_path' => 'img_path|string|false||广告图链接'

      ),

      'getDetail' => array(
      
        'token' => 'token|string|true||用户令牌',

        'id' => 'id|int|true||广告id'
      
      )
    
    ));
  
  }

  /**
   * 保存广告设置
   * @desc 保存广告设置
   *
   * @return int num
   */
  public function save() {
  
    return $this->dm->save($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取广告详情
   * @desc 获取广告详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

}
