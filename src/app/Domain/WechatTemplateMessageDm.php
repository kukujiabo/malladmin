<?php
namespace App\Domain;

/**
 * 微信模版消息接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-01-06
 */
class WechatTemplateMessageDm {

  /**
   * 添加模版消息
   */
  public function add($params) {

    return \App\request('App.WechatTemplateMessage.Add', $params);
  
  }

  /**
   * 获取模版消息列表
   */
  public function getList($params) {
  
    return \App\request('App.WechatTemplateMessage.getList', $params); 
  
  }

}
