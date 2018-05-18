<?php
namespace App\Domain;

/**
 * 外卖订单
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-22
 */
class OrderTakeOutDm {

  /**
   * 取消外卖订单接口服务
   */
  public function cancelOrder($data) {

    return \App\request('App.OrderTakeOut.CancelOrder', $data);
  
  }

  /**
   * 修改外卖订单状态为已完成
   */
  public function updateFinish($data) {

    $data['way'] = 2;

    $data['order_status'] = 3;

    $data['finish_time'] = date("Y-m-d H:i:s");

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  /**
   * 修改外卖订单状态为已签收
   */
  public function updateSignFor($data) {

    $data['way'] = 2;
    
    $data['shipping_status'] = 3;

    $data['sign_time'] = date("Y-m-d H:i:s");

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  /**
   * 修改外卖订单状态为配送中
   */
  public function updateDistribution($data) {

    $data['way'] = 2;

    $data['consign_time'] = date("Y-m-d H:i:s");

    $data['shipping_status'] = 2;

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  /**
   * 修改外卖订单状态为已支付
   */
  public function updatePay($data) {

    $data['way'] = 2;

    $data['order_status'] = 2;

    $data['pay_status'] = 2;

    $data['pay_time'] = date("Y-m-d H:i:s");

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  /**
   * 编辑
   */
  public function update($data) {

    $data['way'] = 2;

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  /**
   * 获取详情
   */
  public function getDetail($condition) {

    $condition['way'] = 2;
    
    return \App\request('App.OrderTakeOut.GetDetail', $condition);
  
  }

  /**
   * 获取列表
   */
  public function queryList($condition) {

    $condition['way'] = 2;

    return \App\request('App.OrderTakeOut.QueryList', $condition);
  
  }

  /**
   * 获取数量
   */
  public function queryCount($condition) {

    return \App\request('App.OrderTakeOut.QueryCount', $condition);

  }

  /**
   * 获取新订单
   */
  public function getNewOrder() {

    $condition = array(
    
      'is_pushed' => 0
    
    );

    $newOrders = \App\request('App.OrderTakeOut.QueryList', $condition);

    $orderIds = array();

    foreach($newOrders as $newOrder) {
    
      array_push($orderIds, $newOrder['order_id']);
    
    }

    $updateCondition = array(
    
      'ids' => implode(',', $orderIds)
    
    );

    $updates = \App\request('App.OrderTakeOut.setPushed', $updateCondition);

    return $newOrders;

  }
    
  /**
   * 更新收货状态
   */
  public function updateReceived($data) {
  
    $data['way'] = 2;

    $data['consign_time'] = date("Y-m-d H:i:s");

    $data['shipping_status'] = 3;

    $data['shipping_status'] = 3;

    return \App\request('App.OrderTakeOut.Update', $data);
  
  }

  public function audit($data) {
  
    return \App\request('App.OrderTakeOut.Audit', $data);
  
  }

}
