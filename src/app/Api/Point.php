<?php
namespace App\Api;

/**
 * 积分服务接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-25
 */
class Point extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      '*' => array(
      
        'token' => 'token|string|true||用户令牌'
      
      ),
    
      'addRule' => array(
      
        'name' => 'name|string|true||规则名称',

        'point_rule_code' => 'point_rule_code|string|true||规则编码',

        'points' => 'points|int|true||积分额度',

        'priority' => 'priority|int|true||优先级，数字越小，优先级越高，0为最高优先级',

        'status' => 'status|int|true||规则状态：1 有效，0 无效',

        'term_type' => 'term_type|int|true||有效期类型',

        'last_long' => 'last_long|int|true||是否长期有效',

        'start_date' => 'start_date|string|false||有效期起始日, 0为一直有效',
        
        'expire_date' => 'expire_date|string|false||有效期截止日, 0为一直有效',

        'valid_days' => 'valid_days|int|false||有效时长（日）'
      
      ),

      'queryRuleList' => array(
      
        'name' => 'name|string|false||规则名称',

        'point_rule_code' => 'point_rule_code|string|false||规则编码',

        'status' => 'status|int|false||规则状态',

        'term_type' => 'term_type|int|false||有效期类型',

        'page' => 'page|int|true|1|页码',

        'page_size' => 'page_size|int|true|20|每页数据条数'
      
      )
    
    ));
  
  }

  /**
   * 新增获取积分规则
   * @desc 新增用户获取积分规则
   *
   * @return int ret 操作状态：200表示成功
   * @return array data[] 结果参数集
   * @return string msg 错误提示
   */
  public function addRule() {
  
    return $this->dm->add($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询积分规则列表
   * @desc 新增用户获取积分规则
   *
   * @return int ret 操作状态：200表示成功
   * @return array data[] 结果参数集
   * @return string msg 错误提示
   */
  public function queryRuleList() {
  
    return $this->dm->queryRuleList($this->retriveRuleParams(__FUNCTION__));
  
  }


}
