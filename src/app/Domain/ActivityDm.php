<?php
namespace App\Domain;

/**
 * 活动服务
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-22
 */
class ActivityDm {

  /**
   * 添加活动
   */
  public function add($params) {
  
    return \App\request('App.Activity.CreateActivity', $params);
  
  }

  /**
   * 查询活动列表
   */
  public function queryList($params) {
  
    return \App\request('App.Activity.QueryList', $params);
  
  }

  /**
   * 删除活动
   */
  public function deleteActivity($params) {
  
    return \App\request('App.Activity.deleteActivity', $params);
  
  }

}
