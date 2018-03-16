<?php
namespace App\Domain;

/** 
 * 系统定义用户动作接口服务
 */
class ActionDm {

  /**
   * 动作列表
   */
  public function getActionList($params) {
  
    return \App\request('App.Action.QueryList', $params); 
  
  }

  /**
   * 添加动作
   */
  public function add($params) {
  
    return \App\request('App.Action.Add', $params); 
  
  }

  /**
   * 编辑动作
   */
  public function edit($params) {
  
    return \App\request('App.Action.update', $params); 

  }

}
