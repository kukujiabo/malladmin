<?php
namespace App\Api;

/**
 * 项目经理接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Manager extends BaseApi {

  public function getRules() {
  
    return $this->getRules(array(
    
      'addManager' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|true||供应商id',
        'name' => 'name|string|true||项目经理名称',
        'phone' => 'phone|string|true||手机号',
        'thumbnail' => 'thumbnail|string|true||项目经理头像',
        'status' => 'status|int|false|1|状态'
      
      ),
    
      'getList' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|false||供应商id',
        'name' => 'name|string|false||项目经理姓名',
        'phone' => 'phone|string|false||手机号',
        'status' => 'status|int|false||状态',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页数据条数'
      
      )
    
    ));
  
  }

  /**
   * 新增项目经理
   * @desc 新增项目经理
   *
   * @return int id
   */
  public function addManager() {
  
    return $this->dm->addManager($this->retriveRuleParams(__FUNCTION__)); 
  
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

}
