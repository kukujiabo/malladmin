<?php
namespace App\Domain;

/**
 * 系统配置
 */
class ConfigurationDm {

  /**
   * 保存微信公众号配置
   */
  public function saveWxPubSv($params) {

    return \App\request('App.Configuration.SaveWxPubSv', $params);
  
  }

  /**
   * 获取微信公众号配置
   */
  public function getWxPubSv($params) {
  
    return \App\request('App.Configuration.getWxPubSv', $params);
  
  }

}
