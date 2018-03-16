<?php
namespace App\Domain;

/**
 * 积分服务
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class PointDm {

  /**
   * 添加积分规则
   */
  public function add($data) {
  
    return \App\request('App.UserObtainPointsRule.Add', $data);
  
  }

  /**
   * 查询积分规则列表
   */
  public function queryRuleList($data) {
  
    return \App\request('App.UserObtainPointsRule.QueryList', $data);
  
  }

}
