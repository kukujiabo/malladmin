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

    $data['shipping_status'] = 1;

    $data['order_status'] = 3;

    $result =  \App\request('App.OrderTakeOut.Update', $data);

    if ($result) {
    
      return $data['consign_time'];
    
    }
  
  }

  /**
   * 修改外卖订单状态为已支付
   */
  public function updatePay($data) {

    $data['way'] = 2;

    $data['order_status'] = 2;

    $data['pay_status'] = 1;

    $data['pay_time'] = date("Y-m-d H:i:s");

    $result = \App\request('App.OrderTakeOut.Update', $data);

    if ($result) {
    
      return $data['pay_time'];
    
    }
  
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

    $data['sign_time'] = date("Y-m-d H:i:s");

    $data['shipping_status'] = 3;

    $data['order_status'] = 4;

    $result = \App\request('App.OrderTakeOut.Update', $data);

    if ($result) {
    
      return $data['sign_time'];

    }
  
  }

  public function audit($data) {
  
    return \App\request('App.OrderTakeOut.Audit', $data);
  
  }

  public function removeOrder($data) {
  
    return \App\request('App.OrderTakeOut.RemoveOrder', $data);
  
  }

  public function getSalesAmount($params) {
  
    return \App\request('App.OrderTakeOut.GetSalesAmount', $params);
  
  }

  public function asyncRecall($data) {
  
    $decode = json_decode($data, true);

    if (empty($decode['sn'])) {
    
      return array('err_msg' => '订单号不能为空');
    
    }
    if (empty($decode['export_code']) && empty($decode['return_code'])) {

      return array('err_msg' => '出库单号或退货单号必须填写');
    
    }

    $updateData = array('sn' => $decode['sn']);

    if ($decode['export_code']) {

      $secret = md5("export_code={$decode['export_code']}sn={$decode['sn']}");

      $updateData['export_code'] = $decode['export_code'];

      if ($secret != $decode['secret_key']) {
      
        return array('err_msg' => '秘钥错误');
      
      }

      $result = \App\request('App.OrderTakeOut.Update', $updateData);

      if ($result > 1) {

        return array('err_msg' => "" );

      } else {
      
        return array('err_msg' => "更新失败！");
      
      }

    } else {
    
      if (empty($decode['goods'])) {
      
        return array('err_msg' => '退货商品必须填写！');
      
      }

      $secret = md5("return_code={$decode['return_code']}sn={$decode['sn']}");

      $updateData['return_code'] = $decode['return_code'];

      $updateData['goods'] = $decode['goods'];

      if ($secret != $decode['secret_key']) {
      
        return array('err_msg' => '秘钥错误');
      
      }

      $result = \App\request('App.OrderTakeOutGoods.ReturnGoods', $updateData);

      if ($result > 1) {

        return array('err_msg' => "");

      } else {
      
        return array('err_msg' => "更新失败！");
      
      }

    }

  
  }

}
