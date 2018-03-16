<?php
namespace App\Api;

/**
 * 微信模版消息接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-01-06
 */
class WechatTemplateMessage extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'add' => array(
      
        'token' => 'token|string|true||用户令牌',

        'short_id' => 'short_id|string|true||模版短id',

        'icon' => 'icon|string|false||模版图标'
      
      ),

      'getList' => array(
      
        'token' => 'token|string|true||用户令牌',
      
      )
    
    ));
  
  }

  /**
   * 添加微信公众号消息模版列表
   * @desc 添加微信公众号消息模版列表
   *
   * @return int ret 操作状态：200表示成功
   * @return boolean true/false
   * @return string msg 错误提示
   */
  public function add() {
  
    return $this->dm->add($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询微信公众号消息模版列表
   * @desc 查询微信公众号消息模版列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
