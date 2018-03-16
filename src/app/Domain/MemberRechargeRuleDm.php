<?php
namespace App\Domain;

use App\Service\Crm\MemberRechargeRuleSv;
use App\Service\Crm\MemberRechargeRuleUseCountSv;

/**
 * 用户充值规则
 * 
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-07
 */
class MemberRechargeRuleDm {

  /**
   * 新增
   */
  public function add($data) {

    return \App\request('App.MemberRechargeRule.Add', $data);
  
  }

  /**
   * 编辑
   */
  public function update($data) {

    return \App\request('App.MemberRechargeRule.Update', $data);
  
  }

  /**
   * 获取详情
   */
  public function getDetail($condition) {

    return \App\request('App.MemberRechargeRule.getDetail', $condition);
  
  }

  /**
   * 获取列表
   */
  public function queryList($condition) {

    return \App\request('App.MemberRechargeRule.QueryList', $condition);
  
  }

  /**
   * 获取数量
   */
  public function queryCount($condition) {

    return \App\request('App.MemberRechargeRule.queryCount', $data);

  }

  /**
   * 启用规则
   */
  public function enable($condition) {

    return \App\request('App.MemberRechargeRule.enable', $data);

  }

  /**
   * 禁用规则
   */
  public function disable($condition) {

    return \App\request('App.MemberRechargeRule.disable', $data);

  }

}
