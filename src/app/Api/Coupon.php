<?php
namespace App\Api;

/**
 * 优惠券接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-19
 */
class Coupon extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      '*' => array(

        'token' => 'token|string|true||用户令牌'
      
      ),
    
      'createCouponType' => array(
      
        'coupon_name' => 'coupon_name|string|true||优惠券名称',

        'coupon_code' => 'coupon_code|string|true||优惠券编码',

        'coupon_image' => 'coupon_image|string|true||优惠券图片',
        
        'coupon_desc' => 'coupon_desc|string|false||优惠券说明',

        'deduction_type' => 'deduction_type|int|true||抵扣类型:1.折扣，2.抵扣',

        'all_shops' => 'all_shops|int|true|1|是否通用:1.通用，0.不通用',

        'need_user_level' => 'need_user_level|int|true|0|用户等级',

        'last_long' => 'last_long|int|true|0|是否长期有效',

        'status' => 'status|int|true|1|启用状态：1.可用，2.停用',

        'term_type' => 'term_type|int|true|2|使用日期类型:1.固定有效期，2.灵活有效期',

        'money' => 'money|int|false||抵扣金额',

        'percentage' => 'percentage|int|false||折扣',

        'shop_id' => 'shop_id|string|false||店铺id',

        'start_time' => 'start_time|string|false||有效期开始事件',

        'end_time' => 'end_time|string|false||有效期结束事件',

        'years' => 'years|int|false|0|有效期（年）',

        'months' => 'months|int|false|0|有效期（月）',

        'days' => 'days|int|false|0|有效期（日）',

        'max_fetch' => 'max_fetch|int|false|0|每人最多领取数量',

        'count' => 'count|int|false|0|发放数量',

        'at_least' => 'at_least|int|false|0|消费满额',

        'online_type' => 'online_type|int|false|3|线上线下：1，线上；2，线下；3，通用',

        'ext_1' => 'ext_1|string|false||商品大类字段',

        'ext_2' => 'ext_2|string|false||商品单品字段'
      
      ),
    
      'getCoupinTypeList' => array(

        'coupon_type_id' => 'coupon_type_id|int|false||优惠券类型Id',

        'shop_id' => 'shop_id|int|false||店铺ID，为0则表示所有门店',
      
        'operator_id' => 'operator_id|int|false||操作员id',

        'deduction_type' => 'deduction_type|int|false||抵扣类型：1 折扣，2 现金，3 包邮',
        
        'coupon_name' => 'coupon_name|string|false||优惠券类型名称',

        'money' => 'money|int|false||发放面额',

        'percentage' => 'percentage|float|false||折扣',

        'count' => 'count|int|false||发放数量，0为无限制',

        'max_fetch' => 'max_fetch|int|false||每人最大领取个数 0无限制',

        'at_least' => 'at_least|float|false||满多少元使用 0代表无限制',

        'need_user_level' => 'need_user_level|int|false||领取人会员等级',

        'range_type' => 'range_type|int|false||使用范围0部分产品使用 1全场产品使用',

        'start_time' => 'start_time|string|false||有效日期开始时间',

        'end_time' => 'end_time|string|false||有效日期结束时间',

        'need_bind' => 'need_bind|int|false||是否需要绑定用户',

        'status' => 'status|int|false||状态：1 可用，2 失效',

        'is_show' => 'is_show|int|false||是否允许首页显示:0 不显示，1 显示',

        'created_at' => 'created_at|string|false||创建时间',
        
        'update_time' => 'update_time|string|false||修改时间',

        'fields' => 'fields|string|false|*|查询字段',

        'order' => 'order|string|false||排序',

        'page' => 'page|int|true|1|页码',

        'page_size' => 'page_size|int|true|20|每页数据条数'
      
      ),

      'adminBatchAdd' => array(
      
        'coupons' => 'coupons|string|true||优惠券',

        'member_name' => 'member_name|string|false||会员名称',

        'user_tel' => 'user_tel|string|false||会员手机号',

        'card_id' => 'card_id|string|false||会员卡号',

        'sequence' => 'sequence|string|true||流水号',

        'remark' => 'remark|string|false||备注'
      
      ),

      'getCouponTypeDetail' => array(
      
        'coupon_type_id' => 'coupon_type_id|int|true||优惠券种类id'
      
      ),

      'couponGrantUnionLog' => array(
      
        'token' => 'token|string|true||用户令牌',
      
        'member_name' => 'member_name|string|false||会员名称',

        'mobile' => 'mobile|string|false||手机号',

        'sequence' => 'sequence|string|false||流水号',

        'coupon_code' => 'coupon_code|string|false||优惠券编号',

        'coupon_name' => 'coupon_name|string|false||优惠券名称',

        'rule_id' => 'rule_id|int|false||发放规则id',

        'start_time' => 'start_time|string|false||发放开始时间',

        'end_time' => 'end_time|string|false||发放结束时间',

        'page' => 'page|int|true|1|页码',

        'pageSize' => 'pageSize|int|true|20|每页条数'
      
      ),

      'couponGetList' => array(
      
        'token' => 'token|string|true||用户令牌',

        'page' => 'page|int|true|1|页码',
      
        'page_size' => 'page_size|int|true|20|每页条数',
      
      ),

      'getAllType'  => array(
      
        'token' => 'token|string|true||用户令牌',
      
      ),

      'updateCouponType' => array(
      
        'token' => 'token|string|true||用户令牌',

        'coupon_type_id' => 'coupon_type_id|int|true||优惠券种类id',
      
        'coupon_name' => 'coupon_name|string|false||优惠券名称',

        'coupon_image' => 'coupon_image|string|false||优惠券图片',

        'deduction_type' => 'deduction_type|int|false||抵扣类型:1.折扣，2.抵扣',

        'last_long' => 'last_long|int|false|0|是否长期有效',

        'status' => 'status|int|false|1|启用状态：1.可用，2.停用',

        'term_type' => 'term_type|int|false|2|使用日期类型:1.固定有效期，2.灵活有效期',

        'money' => 'money|int|false||抵扣金额',

        'percentage' => 'percentage|int|false||折扣',

        'start_time' => 'start_time|string|false||有效期开始事件',

        'end_time' => 'end_time|string|false||有效期结束事件',

        'years' => 'years|int|false|0|有效期（年）',

        'months' => 'months|int|false|0|有效期（月）',

        'days' => 'days|int|false|0|有效期（日）',

        'at_least' => 'at_least|int|false|0|消费满额',

        'online_type' => 'online_type|int|false|3|线上线下：1，线上；2，线下；3，通用',

      )
    
    ));
  
  }

  /**
   * 获取优惠券种类列表
   * @desc 获取优惠券种类列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data[] 结果参数集
   * @return int data.total 数据总条数
   * @return int data.page 当前页码
   * @return array data.list[] 优惠券种类队列
   * @return int data.list[].coupon_type_id 优惠券类型Id
   * @return int data.list[].shop_id 店铺ID，为0则表示所有门店
   * @return int data.list[].operator_id 
   * @return int data.list[].deduction_type 抵扣类型：1 折扣，2 现金，3 包邮
   * @return string data.list[].coupon_name 优惠券名称
   * @return float data.list[].money 发放面额（单位：元）
   * @return int data.list[].percentage 折扣
   * @return int data.list[].count 发放数量，0为无限制
   * @return int data.list[].max_fetch 每人最大领取个数，0无限制
   * @return float data.list[].at_least 满多少元使用，0代表无限制
   * @return int data.list[].need_user_level 领取人会员等级
   * @return int data.list[].range_type 使用范围0部分产品使用，1全场产品使用
   * @return string data.list[].start_time 有效日期开始时间
   * @return string data.list[].end_time 有效日期结束时间
   * @return int data.list[].need_bind 是否需要绑定用户:0-否，1-是
   * @return int data.list[].status 状态：1 可用，2 失效
   * @return string data.list[].create_time 创建时间
   * @return string data.list[].update_time 修改时间
   * @return int data.list[].is_show 是否允许首页显示0不显示1显示
   * @return string data.list[].description
   * @return int data.list[].term_type 有效期类型：1.固定有效期，2.灵活有效期
   * @return int data.list[].valid_days 有效期长，当term_type为2时有效，用于动态计算优惠券实例的有效期
   * @return string data.list[].coupon_image
   * @return int data.list[].last_long 是否长期有效
   * @return string msg 错误提示
   */
  public function getCoupinTypeList() {
  
    $conditions = $this->retriveRuleParams(__FUNCTION__);  

    $regulation = array(

      'page' => 'required',

      'page_size' => 'required',

    );

    \App\Verification($conditions, $regulation);
  
    return $this->dm->getCoupinTypeList($conditions);

  }

  /**
   * 创建优惠券种类
   * @desc 创建优惠券种类
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string msg 错误提示
   */
  public function createCouponType() {
  
    $data = $this->retriveRuleParams(__FUNCTION__);  
  
    return $this->dm->createCouponType($data);

  }

  /**
   * 管理员后台批量添加优惠券
   * @desc 管理员后台批量添加优惠券
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string msg 错误提示
   */
  public function adminBatchAdd() {
  
    return $this->dm->adminBatchAdd($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 优惠券发放日志联合信息
   * @desc 优惠券发放日志联合信息
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string msg 错误提示
   */
  public function couponGrantUnionLog() {
  
    return $this->dm->couponGrantUnionLog($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 优惠券领取列表
   * @desc 优惠券领取列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data token
   * @return string msg 错误提示
   */
  public function couponGetList() {
  
    return $this->dm->couponGetList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取全部类型列表
   * @desc 获取全部类型列表
   *
   * @return array data
   */
  public function getAllType() {
  
    return $this->dm->getAllType($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 获取优惠券详情
   * @desc 获取优惠券详情
   *
   * @return array data
   */
  public function getCouponTypeDetail() {
  
    return $this->dm->getCouponTypeDetail($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 更新优惠券种类
   * @desc 更新优惠券种类
   *
   * @return array data
   */
  public function updateCouponType() {
  
    return $this->dm->updateCouponType($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
