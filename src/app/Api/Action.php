<?php
namespace App\Api;

/**
 * 用户动作接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-21
 */
class Action extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      '*' => array(
      
        'token' => 'token|string|true||用户令牌'
      
      ),
    
      'getActionList' => array(

        'action_name' => 'action_name|string|false||动作名称',

        'action_code' => 'action_code|string|false||动作编码',

        'page' => 'page|int|false|1|页码',

        'pageSize' => 'pageSize|int|false|20|每页条数'
      
      ),

      'add' => array(
      
        'action_name' => 'action_name|string|true||动作名称',

        'action_code' => 'action_code|string|true||动作编码',

        'icon' => 'icon|string|true||动作图标',

        'operation' => 'operation|string|true||动作路由',
      
      ),

      'edit' => array(

        'id' => 'id|int|true||动作id',
      
        'action_name' => 'action_name|string|false||动作名称',

        'action_code' => 'action_code|string|false||动作编码',

        'icon' => 'icon|string|false||动作图标',

        'operation' => 'operation|string|false||动作路由',
      
      )
    
    ));
  
  }

  /**
   * 获取用户动作列表
   * @desc 获取用户动作列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return int data.id              动作id
   * @return string data.action_name  动作名称
   * @return string data.action_code  动作编码
   * @return string data.operation    操作路径
   * @return string data.created_at   创建事件
   * @return string msg 错误提示
   */
  public function getActionList() {
  
    return $this->dm->getActionList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 添加用户动作
   * @desc 添加用户动作
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function add() {
  
    return $this->dm->add($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 修改用户动作信息
   * @desc 修改用户动作信息
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function edit() {
  
    return $this->dm->edit($this->retriveRuleParams(__FUNCTION__));
  
  }

}

