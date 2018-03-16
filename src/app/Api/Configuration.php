<?php
namespace App\Api;

/**
 * 系统配置接口
 *
 * @author: Meroc Chen <398515393@qq.com> 2017-12-14
 *
 */
class Configuration extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'saveWxPubSv' => array(
      
        'token' => 'token|string|true||用户令牌',

        'wps_appid' => 'wps_appid|string|true||公众号appid',

        'wps_appsecret' => 'wps_appsecret|string|true||公众号app密钥',

        'wps_developing_token' => 'wps_developing_token|string|true||公众众号开发token',

        'wps_encodingaeskey' => 'wps_encodingaeskey|string|true||公众号加密密钥',
      
      ),

      'getWxPubSv' => array(
      
        'token' => 'token|string|true||用户令牌',

        'sub_module' => 'sub_module|string|true||配置所属子模块'
      
      )
    
    ));
  
  }

  /**
   * 保存微信公众号参数配置
   *
   * @desc 保存微信公众号参数配置
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string msg 错误提示
   */
  public function saveWxPubSv() {

    $params = $this->retriveRuleParams(__FUNCTION__);
  
    return $this->dm->saveWxPubSv($params);
  
  }

  /**
   * 获取公众号参数配置
   * @desc 获取公众号参数配置
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string data[] wps_appid 微信公众号appid
   * @return string data[] wps_appsecret 微信公众号appsecret
   * @return string data[] wps_developing_token 微信公众号开发token
   * @return string data[] wps_encodingaeskey 微信公众号解密密钥
   * @return string msg 错误提示
   */
  public function getWxPubSv() {
  
    $params = $this->retriveRuleParams(__FUNCTION__);
  
    return $this->dm->getWxPubSv($params);
  
  }

}
