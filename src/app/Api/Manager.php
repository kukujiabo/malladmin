<?php
namespace App\Api;

/**
 * 项目经理接口
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class Manager extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addManager' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|true||供应商id',
        'name' => 'name|string|true||项目经理名称',
        'phone' => 'phone|string|true||手机号',
        'thumbnail' => 'thumbnail|string|false||项目经理头像',
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
      
      ),

      'getAll' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'pid' => 'pid|int|false||供应商id',
        'name' => 'name|string|false||项目经理姓名',
        'phone' => 'phone|string|false||手机号',
        'status' => 'status|int|false||状态'
      
      ),

      'relatManager' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'mid' =>  'mid|int|true||项目经理id',
        'wid' =>  'wid|int|true||工地id',
        'status' =>  'status|int|true||状态',
        'min_credit' =>  'min_credit|int|true||最小额度',
        'max_credit' =>  'max_credit|int|true||最大额度'
      
      ),

      'relatManagerList' => array(
      
        'token' => 'token|string|true||管理员令牌',
        'mid' =>  'mid|int|true||项目经理id',
        'wid' =>  'wid|int|true||工地id',
        'status' =>  'status|int|true||状态',
        'page' => 'page|int|false||页码',
        'page_size' => 'page|int|false||每页条数'
      
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

  /**
   * 查询所有条目
   * @desc 查询所有条目
   *
   * @return array list
   */
  public function getAll() {
  
    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 关联项目经理
   * @desc 关联项目经理
   *
   * @return
   */
  public function relatManager() {
  
    return $this->dm->relatManager($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 关联项目经理列表
   * @desc 关联项目经理列表
   *
   * @return
   */
  public function relatManagerList() {
  
    return $this->dm->relatManagerList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
