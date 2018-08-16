<?php
namespace App\Api;

/**
 * 工地接口 
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class WorkSpace extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addWorkSpace' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|true||所属供应商',
        'name' => 'name|string|true||工地名称',
        'address' => 'address|string|false||工地地址',
        'province' => 'province|string|false||所在省份',
        'city' => 'city|int|false||所在城市',
        'cid' => 'cid|int|false||阶段id',
        'contact' => 'contact|string|false||联系人',
        'phone' => 'phone|string|false||手机号'
      
      ),

      'getList' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|false||供应商id',
        'name' => 'name|string|false||工地名称',
        'province' => 'province|string|false||省份id',
        'city' => 'city|string|false||城市id',
        'order' => 'order|string|false||排序',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      ),

      'setTiming' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'id' => 'id|int|true||工地id',
        'cid' => 'cid|int|true||阶段id'
      
      )
    
    ));
  
  }

  /**
   * 新增工地
   * @desc 新增工地
   *
   * @return int id
   */
  public function addWorkSpace() {
  
    return $this->dm->addWorkSpace($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array list
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 设置阶段
   * @desc 设置阶段
   *
   * @return int num
   */
  public function setTiming() {
  
    return $this->dm->setTiming($this->retriveRuleParams(__FUNCTION__));
  
  }

}
