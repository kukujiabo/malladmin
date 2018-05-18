<?php

namespace App\Api;

/**
 * 外卖订单接口服务
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-22
 */
class OrderTakeOut extends BaseApi {

  public function getRules() {

    return $this->rules(array(

      '*' => array(
          'token'  => array('name' => 'token', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '管理员令牌'),
      ),

      'queryList' => array(

        'order_id' => 'order_id|string|false||表序号',

        'sn' => 'sn|string|false||订单编号',

        'buyer_id' => 'buyer_id|string|false||用户id',

        'shop_id' => 'shop_id|int|false||卖家店铺id',
        
        'card_id' => 'card_id|string|false||会员卡号',
        
        'user_tel' => 'user_tel|string|false||手机号',
        
        'member_name' => 'member_name|string|false||用户名',
        
        'consigner' => 'consigner|string|false||收货人',

        'mobile' => 'mobile|string|false||收货人手机号',

        'order_status' => 'order_status|int|false||订单状态 1-未支付 2-已支付 3-已签收',

        'shipping_status' => 'shipping_status|int|false||订单配送状态 1-未配送 2-配送中 3-已配送',

        'create_time' => 'create_time|string|false||创建时间',
        
        'consign_time' => 'consign_time|string|false||发货时间',

        'sign_time' => 'sign_time|string|false||买家签收时间',

        'goods_status' => 'goods_status|int|false|1|1-取订单商品 2-不取订单商品',

        'finish_time' => 'finish_time|string|false||完成时间',

        'pay_time' => 'pay_time|string|false||支付时间',
        
        'shipping_time' => 'shipping_time|string|false||买家要求的配送时间',

        'fields' => 'fields|string|false|*|查询字段',

        'order' => 'order|string|false||排序',

        'page' => 'page|int|true|1|页码',

        'page_size' => 'page_size|int|true|20|每页数据条数'

      ),

      'queryCount' => array(

        'order_id' => 'order_id|string|false||订单编号',

        'sn' => 'sn|string|false||订单编号',

        'buyer_id' => 'buyer_id|string|false||用户id',

        'shop_id' => 'shop_id|int|false||卖家店铺id',

        'order_status' => 'order_status|int|false||订单状态',

        'create_time' => 'create_time|string|false||创建时间',
        
        'consign_time' => 'consign_time|string|false||发货时间',
        
        'sign_time' => 'sign_time|string|false||买家签收时间',

        'finish_time' => 'finish_time|string|false||完成时间',

        'pay_time' => 'pay_time|string|false||支付时间',
        
        'shipping_time' => 'shipping_time|string|false||买家要求的配送时间',
      
      ),

      'update' => array(

        'order_id' => 'order_id|string|true||订单编号',

        'order_status' => 'order_status|int|false||订单状态 1-未支付 2-已支付 3-已签收',
        
        'pay_status' => 'pay_status|int|false||订单付款状态 1-未付款 2-已付款',

        'shipping_status' => 'shipping_status|int|false||订单配送状态 1-未配送 2-配送中 3-已配送',
        
        'consign_time' => 'consign_time|string|false||发货时间',

        'driver_name' => 'driver_name|string|false||驾驶员姓名',

        'driver_phone' => 'driver_phone|string|false||驾驶员手机号',
        
        'sign_time' => 'sign_time|string|false||签收时间',

        'finish_time' => 'finish_time|string|false||完成时间',

        'pay_time' => 'pay_time|string|false||支付时间',
      
      ),

      'getDetail' => array(

        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'updatePay' => array(

        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'updateDistribution' => array(

        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'updateReceived' => array(
      
        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'updateSignFor' => array(

        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'updateFinish' => array(

        'order_id' => 'order_id|string|true||订单编号',
      
      ),

      'cancelOrder' => array(

        'order_sn' => 'order_sn|string|true||订单编号',

        'comment' => 'comment|string|true||备注',
      
      ),

      'audit' => array(
      
        'token' => 'token|string|true||用户令牌',
        'cas' => 'token|string|true||帐套号',
        'order_nos' => 'token|string|true||订单号'
      
      )
      
    ));

  }
    
  /**
   * 取消外卖订单接口服务
   * @desc 取消外卖订单接口服务
   * @return int ret 操作状态：200表示成功
   * @return int data 修改条数
   * @return string msg 错误提示
   */
   
  public function cancelOrder(){

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(
      'order_sn' => 'required',
      'comment' => 'required',
    );

    \App\Verification($params, $regulation);

    return  $this->dm->cancelOrder($params);

  }

  /**
   * 修改外卖订单状态为已完成
   * @desc 修改外卖订单状态为已完成
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 修改条数
   * @return string msg 错误提示
   */
  public function updateFinish() {

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($params, $regulation);

    return $this->dm->updateFinish($params);
  
  }

  /**
   * 修改外卖订单状态为已签收
   * @desc 修改外卖订单状态为已签收
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 修改条数
   * @return string msg 错误提示
   */
  public function updateSignFor() {

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($params, $regulation);

    return $this->dm->updateSignFor($params);
  
  }

  /**
   * 修改外卖订单状态为配送中
   * @desc 修改外卖订单状态为配送中
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 修改条数
   * @return string msg 错误提示
   */
  public function updateDistribution() {

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($params, $regulation);

    return $this->dm->updateDistribution($params);
  
  }

  /**
   * 修改外卖订单状态为已支付
   * @desc 修改外卖订单状态为已支付
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 修改条数
   * @return string msg 错误提示
   */
  public function updatePay() {

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($params, $regulation);

    return $this->dm->updatePay($params);
  
  }

  /**
   * 修改外卖订单
   * @desc 修改外卖订单
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 修改条数
   * @return string msg 错误提示
   */
  public function update() {

    $params = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($params, $regulation);

    return $this->dm->update($params);
  
  }

  /**
   * 查询外卖订单详情
   * @desc 查询外卖订单详情
   *
   * @return int ret 操作状态：200表示成功
   * @return array data[] 结果参数集
   * @return int data.id 表序号
   * @return string data.sn 订单编号
   * @return string data.out_trade_no 外部交易号
   * @return int data.payment_type 支付类型。取值范围：WEIXIN (微信自由支付) WEIXIN_DAIXIAO (微信代销支付) ALIPAY (支付宝支付)
   * @return int data.shipping_type 订单配送方式：1-快递配送，2-自提
   * @return int data.shipping_company_id 配送物流公司ID
   * @return string data.order_from 订单来源
   * @return int data.buyer_id 买家id
   * @return string data.user_name 买家会员名称
   * @return string data.buyer_ip 买家ip
   * @return string data.buyer_message 买家附言
   * @return string data.buyer_invoice 买家发票信息
   * @return string data.shipping_time 买家要求配送时间
   * @return string data.sign_time 买家签收时间
   * @return string data.pay_time 订单付款时间
   * @return int data.shop_id 卖家店铺id
   * @return string data.shop_name 卖家店铺名称
   * @return string data.shop_logo 卖家店铺logo
   * @return int data.seller_star 卖家对订单的标注星标：1-标，0-未标
   * @return string data.seller_memo 卖家对订单的备注
   * @return string data.consign_time 卖家发货时间
   * @return int data.consign_time 卖家延迟发货时间（时间戳）
   * @return float data.goods_money 商品总价（单位：元）
   * @return float data.tax_money 税费（单位：元）
   * @return float data.order_money 订单总价（单位：元）
   * @return int data.point 订单消耗积分
   * @return float data.point_money 订单消耗积分抵多少钱（单位：元）
   * @return int data.coupon_id 订单代金券id
   * @return float data.coupon_money 订单代金券支付金额
   * @return float data.user_money 订单余额支付金额
   * @return float data.user_platform_money 用户平台余额支付
   * @return float data.promotion_money 订单优惠活动金额
   * @return float data.shipping_money 订单运费
   * @return float data.pay_money 订单实付金额
   * @return float data.refund_money 订单退款金额
   * @return float data.coin_money 购物币金额
   * @return int data.give_point 订单赠送积分
   * @return float data.give_coin 订单成功之后返购物币
   * @return int data.order_status 订单状态：1-未支付，2-已支付，3-已签收
   * @return int data.pay_status 订单付款状态：1-未付款，2-已付款
   * @return int data.pay_status 订单配送状态：1-未配送，2-配送中，3-已配送
   * @return string data.create_time 创建时间
   * @return string data.finish_time 订单完成时间
   * @return int data.address_id 地址id
   * @return string data.consigner 收货人名称
   * @return string data.mobile 手机号
   * @return string data.phone 固定电话
   * @return int data.province 省id
   * @return int data.city 市id
   * @return int data.district 区id
   * @return string data.address 详细地址
   * @return int data.zip_code 邮编
   * @return string data.province_name 省名称
   * @return string data.city_name 市名称
   * @return string data.district_name 区/县名称
   * @return array data.goods_list[] 订单商品数据
   * @return int data.goods_list[].goods_id 订单商品id
   * @return string data.goods_list[].goods_name 商品名称
   * @return int data.goods_list[].sku_id skuID
   * @return string data.goods_list[].sku_name sku名称
   * @return float data.goods_list[].price 商品价格
   * @return float data.goods_list[].cost_price 商品成本价
   * @return int data.goods_list[].num 购买数量
   * @return float data.goods_list[].goods_money 商品总价
   * @return string data.goods_list[].goods_picture 商品图片
   * @return int data.goods_list[].shop_id 店铺id
   * @return string msg 错误提示
   */
  public function getDetail() {

    $conditions = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

      'order_id' => 'required',

    );

    \App\Verification($conditions, $regulation);

    return $this->dm->getDetail($conditions);

  }

  /**
   * 查询外卖订单列表
   * @desc 查询外卖订单列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data[] 结果参数集
   * @return int data.total 数据条数
   * @return int data.page 页码
   * @return int data.list[] 数据列表
   * @return int data.list[].id 表序号
   * @return string data.list[].sn 订单编号
   * @return string data.list[].out_trade_no 外部交易号
   * @return int data.list[].payment_type 支付类型。取值范围：WEIXIN (微信自由支付) WEIXIN_DAIXIAO (微信代销支付) ALIPAY (支付宝支付)
   * @return int data.list[].shipping_type 订单配送方式：1-快递配送，2-自提
   * @return int data.list[].shipping_company_id 配送物流公司ID
   * @return string data.list[].order_from 订单来源
   * @return int data.list[].list[].buyer_id 买家id
   * @return string data.list[].user_name 买家会员名称
   * @return string data.list[].buyer_ip 买家ip
   * @return string data.list[].buyer_message 买家附言
   * @return string data.list[].buyer_invoice 买家发票信息
   * @return string data.list[].shipping_time 买家要求配送时间
   * @return string data.list[].sign_time 买家签收时间
   * @return string data.list[].pay_time 订单付款时间
   * @return int data.list[].shop_id 卖家店铺id
   * @return string data.list[].shop_name 卖家店铺名称
   * @return string data.list[].shop_logo 卖家店铺logo
   * @return int data.list[].seller_star 卖家对订单的标注星标：1-标，0-未标
   * @return string data.list[].seller_memo 卖家对订单的备注
   * @return string data.list[].consign_time 卖家发货时间
   * @return int data.list[].consign_time 卖家延迟发货时间（时间戳）
   * @return float data.list[].goods_money 商品总价（单位：元）
   * @return float data.list[].tax_money 税费（单位：元）
   * @return float data.list[].order_money 订单总价（单位：元）
   * @return int data.list[].point 订单消耗积分
   * @return float data.list[].point_money 订单消耗积分抵多少钱（单位：元）
   * @return int data.list[].coupon_id 订单代金券id
   * @return float data.list[].coupon_money 订单代金券支付金额
   * @return float data.list[].user_money 订单余额支付金额
   * @return float data.list[].user_platform_money 用户平台余额支付
   * @return float data.list[].promotion_money 订单优惠活动金额
   * @return float data.list[].shipping_money 订单运费
   * @return float data.list[].pay_money 订单实付金额
   * @return float data.list[].refund_money 订单退款金额
   * @return float data.list[].coin_money 购物币金额
   * @return int data.list[].give_point 订单赠送积分
   * @return float data.list[].give_coin 订单成功之后返购物币
   * @return int data.list[].order_status 订单状态：1-未支付，2-已支付，3-已签收
   * @return int data.list[].pay_status 订单付款状态：1-未付款，2-已付款
   * @return int data.list[].pay_status 订单配送状态：1-未配送，2-配送中，3-已配送
   * @return string data.list[].create_time 创建时间
   * @return string data.list[].finish_time 订单完成时间
   * @return array data.list[].goods_list[] 订单商品数据
   * @return int data.list[].goods_list[].goods_id 订单商品id
   * @return string data.list[].goods_list[].goods_name 商品名称
   * @return int data.list[].goods_list[].sku_id skuID
   * @return string data.list[].goods_list[].sku_name sku名称
   * @return float data.list[].goods_list[].price 商品价格
   * @return float data.list[].goods_list[].cost_price 商品成本价
   * @return int data.list[].goods_list[].num 购买数量
   * @return float data.list[].goods_list[].goods_money 商品总价
   * @return string data.list[].goods_list[].goods_picture 商品图片
   * @return int data.list[].goods_list[].shop_id 店铺id
   * @return string msg 错误提示
   */
  public function queryList() {

    $conditions = $this->retriveRuleParams(__FUNCTION__);

    $regulation = array(

      'token' => 'required',

    );

    \App\Verification($conditions, $regulation);

    return $this->dm->queryList($conditions);

  }

  /**
   * 查询外卖订单数量
   * @desc 查询外卖订单数量
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 条数
   * @return string msg 错误提示
   */
  public function queryCount() {

    $conditions = $this->retriveRuleParams(__FUNCTION__);
  
    $regulation = array(

      'token' => 'required',

    );

    \App\Verification($conditions, $regulation);

    return $this->dm->queryCount($conditions);
  
  }

  /**
   * 查询外卖新订单
   * @desc 查询外卖新订单数量
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 条数
   * @return string msg 错误提示
   */
  public function getNewOrder() {
  
    return $this->dm->getNewOrder();
  
  }

  /**
   * 更新订单收货
   * @desc 更新订单收货
   *
   * @return int ret 操作状态：200表示成功
   * @return array data 条数
   * @return string msg 错误提示
   */
  public function updateReceived() {
  
    return $this->dm->updateReceived($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 订单审核
   * @desc 订单审核
   *
   * @return int array
   */
  public function audit() {
  
    return $this->dm->audit($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
