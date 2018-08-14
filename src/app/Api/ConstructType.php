<?php
namespace App\Api;

/**
 * 施工类型接口
 *
 */
class ConstructType extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'create' => array(
      
        'name' => 'name|string|true||施工类型名称',

        'remark' => 'remark|string|false||备注',

        'attrs' => 'attrs|string|false||施工类型属性'
      
      ),
    
      'getAll' => array(
      
      
      ),

      'getDetail' => array(

        'id' => 'id|int|true||id'
      
      ),

      'updateConstruct' => array(
      
        'id' => 'id|int|true||id',
      
        'name' => 'name|string|true||施工类型名称',

        'remark' => 'remark|string|false||备注',

        'attrs' => 'attrs|string|false||施工属性'
      
      ),

      'removeConstruct' => array(
      
        'id' => 'id|int|true||id'
      
      )
    
    )); 
  
  }


  /**
   * 创建施工类型
   * @desc 创建施工类型
   *
   * @return int id
   */
  public function create() {

    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询全部施工类型
   * @desc 查询全部施工类型
   *
   */
  public function getAll() {
  
    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询施工类型详情
   * @desc 查询施工类型详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 更新施工类型
   * @desc 更新施工类型
   *
   * @return int num
   */
  public function updateConstruct() {
  
    return $this->dm->updateConstruct($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 删除施工类型
   * @desc 删除施工类型
   *
   * @return int num
   */
  public function removeConstruct() {
  
    return $this->dm->removeConstruct($this->retriveRuleParams(__FUNCTION__));
  
  }


}
