<?php
namespace App\Api;

/**
 * 系统定义活动接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-22
 */
class Activity extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      '*' => array(

        'token' => 'token|string|true||用户令牌'
      
      ),

      'add' => array(
      
        'activity_name' => 'activity_name|string|true||活动名称',

        'activity_code' => 'activity_code|string|true||活动编码',

        'activity_shops' => 'activity_shops|string|true||活动门店',

        'start_date' => 'start_date|string|true||开始时间',

        'end_date' => 'end_date|string|true||结束时间',

        'priority' => 'priority|string|true||优先级',

        'description' => 'description|string|false||活动图文详情',

        'coupons' => 'coupons|string|false||活动配置优惠券',

        'exchange' => 'exchange|string|false||活动配置积分',

        'points' => 'points|string|false||活动配置积分',

        'type' => 'type|int|false||活动类型',

        'pos_id' => 'pos_id|string|false||门店posid',

        'last_long' => 'last_long|int|true|0|是否长期有效，0，是；1，否',

        'all_shops' => 'all_shops|int|true|0|是否所有门店，0，是；1，否',

      
      ),

      'queryList' => array(

        'activity_name' => 'activity_name|string|false||活动名称',

        'activity_code' => 'activity_code|string|false||活动编码',

        'activity_shops' => 'activity_shops|string|false||活动门店',

        'page' => 'page|int|true|1|页码',

        'pageSize' => 'pageSize|int|true|1|每页数量',

      ),

      'deleteActivity' => array(

        'token' => 'token|string|true||用户令牌',
      
        'id' => 'id|int|true||删除活动'
      
      )
    
    ));
  
  }

  /**
   * 添加活动
   * @desc 添加活动
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function add() {
  
    return $this->dm->add($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询活动列表
   * @desc 查询活动列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function queryList() {
  
    return $this->dm->queryList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除活动
   * @desc 删除活动
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function deleteActivity() {
  
    return $this->dm->deleteActivity($this->retriveRuleParams(__FUNCTION__));
  
  }

}
