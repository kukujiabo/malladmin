<?php
namespace App\Domain;

/**
 * 优惠券
 */
class CouponDm {

  /**
   * 创建优惠券种类
   */
  public function createCouponType($data) {
  
    return \App\request('App.CouponType.CreateCouponType', $data);
  
  }

  /**
   * 获取优惠券种类列表
   */
  public function getCoupinTypeList($data) {
  
    return \App\request('App.CouponType.queryList', $data);
  
  }

  /**
   * 后台管理员批量添加优惠券
   */
  public function adminBatchAdd($data) {
  
    return \App\request('App.Coupon.AdminBatchAdd', $data);
  
  }

  /**
   * 优惠券发放日志
   */
  public function couponGrantUnionLog($data) {
  
    return \App\request('App.CouponGrantLog.CouponGrantUnionLog', $data);
  
  }

  /**
   * 优惠券领取日志
   */
  public function couponGetList($data) {
  
    return \App\request('App.Coupon.CouponGetList', $data);
  
  }

  public function getAllType($data) {
  
    return \App\request('App.CouponType.GetAll', $data);
  
  }

  public function getCouponTypeDetail($data) {
  
    return \App\request('App.CouponType.GetDetail', $data);
  
  }

  public function updateCouponType($data) {
  
    return \App\request('App.CouponType.Update', $data);
  
  }

}
