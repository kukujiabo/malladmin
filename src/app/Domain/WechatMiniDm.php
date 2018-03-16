<?php
namespace App\Domain;

/**
 * 微信小程序
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-28
 */
class WechatMiniDm {

  /**
   * 添加小程序
   */
  public function add($data) {
  
    return \App\request('App.WechatMini.Add', $data);
  
  }

  /**
   * 查询小程序列表
   */
  public function queryList($data) {
  
    return \App\request('App.WechatMini.QueryList', $data);
  
  }

}
