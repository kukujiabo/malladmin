<?php
namespace App\Domain;

/**
 * 工地资料
 */
class WorkSpaceDm {

  /**
   * 添加工地
   */
  public function addWorkSpace() {
  
    return \App\request('App.WorkSpace.AddWorkSpace', $params);
  
  }

  /**
   * 获取工地列表
   */
  public function getList() {
  
    return \App\request('App.WorkSpace.getList', $params);
  
  }

}
