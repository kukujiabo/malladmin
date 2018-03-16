<?php
namespace App\Domain;

/**
 * 微信相关服务接口
 */
class WechatDm {

  /**
   * 创建微信公众号菜单
   */
  public function create($param) {

    return \App\request('App.WechatMenu.Create', $param);
  
  }

  /**
   * 拉取微信公众号微信菜单
   */
  public function getMenu($param) {
  
    return \App\request('App.WechatMenu.GetMenu', $param);
  
  }

  /**
   * 添加微信公众号自动回复
   */
  public function addAutoResponse($param) {
  
    return \App\request('App.WechatResponseMessage.addAutoResponse', $param);
  
  }

}
