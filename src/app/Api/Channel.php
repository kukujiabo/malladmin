<?php
namespace App\Api;

/**
 * 渠道接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-14
 */
class Channel extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

        'add' => array(
    
        'token' => 'token|string|true||用户令牌',

        'type' => 'type|int|true||渠道类型：1.门店，2.团队，3.个人',

        'name' => 'name|string|true||渠道名称',

        'action_name' => 'action_name|string|true||二维码类型,QR_SCENE为临时的整型参数值，QR_STR_SCENE为临时的字符串参数值，QR_LIMIT_SCENE为永久的整型参数值，QR_LIMIT_STR_SCENE为永久的字符串参数值',

        'scene_str' => 'scene_str|string|true||场景值ID',

        'entity' => 'entity|string|false||渠道实体id',

        'expire_seconds' => 'expire_seconds|string|false||该二维码有效时间，以秒为单位。最大不超过2592000（即30天）'

      ),

      'queryList' => array (

        'token' => 'token|string|true||用户令牌',
  
        'type' => 'type|int|false||渠道类型id',

        'name' => 'name|string|false||渠道名称',

        'action_name' => 'action_name|int|false||二维码类型，QR_SCENE为临时的整型参数值，QR_STR_SCENE为临时的字符串参数值，QR_LIMIT_SCENE为永久的整型参数值，QR_LIMIT_STR_SCENE为永久的字符串参数值',

        'scene_id' => 'scene_id|int|false||场景值ID',

        'expire_day' => 'expire_seconds|int|false||过期天数',

        'page' => 'page|int|false||页码',

        'page_size' => 'page_size|int|false||每页数量',
  
      )
    
    ));
  
  }

  /**
   * 新增渠道
   */
  public function add() {

    $params = $this->retriveRuleParams('add');
  
    return $this->dm->add($params);
  
  }

  /**
   * 查询列表
   */
  public function queryList() {
  
    $params = $this->retriveRuleParams('queryList');
  
    return $this->dm->queryList($params);

  }

}
