<?php
namespace App\Domain;

/**
 * 渠道管理
 *
 * @author Meroc Chen<398515393@qq.com> 2017-12-14
 */
class ChannelDm {

  /**
   * 新增渠道
   */
  public function add($data) {
  
    return \App\request('App.Channel.Add', $data);
  
  }

  /**
   * 查询渠道列表
   */
  public function queryList($data) {

    return \App\request('App.Channel.QueryList', $data);
  
  }
}
