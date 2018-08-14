<?php
namespace App\Api;

/**
 * 房屋布局接口
 *
 */
class HouseLayout extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(

      'create' => array(

        'token' => 'token|string|true||管理员令牌',
    
        'layout_name' => 'layout_name|string|true||布局名称',

        'info' => 'info|string|false||其他信息',

        'attrs' => 'attrs|string|false||属性'

      ),

      'getAll' => array(

        'token' => 'token|string|true||管理员令牌'
      
      ),

      'getDetail' => array(
      
        'token' => 'token|string|true||管理员令牌',

        'id' => 'id|int|true||布局id'
      
      ),

      'removeLayout' => array(
      
        'token' => 'token|string|true||管理员令牌',

        'id' => 'id|int|true||布局id'
      
      ),

      'updateLayout' => array(

        'id' => 'id|int|true||布局id',
      
        'layout_name' => 'layout_name|string|true||布局名称',

        'info' => 'info|string|false||其他信息',

        'attrs' => 'attrs|string|false||属性'
      
      )
    
    ));
  
  }

  /**
   * 新建布局项目
   * @decs 新建布局项目
   *
   * @return int id
   */
  public function create() {
  
    return $this->dm->create($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询全部
   * @desc 查询全部
   *
   * @return array data
   */
  public function getAll() {

    return $this->dm->getAll($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询布局详情
   * @desc 查询布局详情
   *
   * @return array data
   */
  public function getDetail() {
  
    return $this->dm->getDetail($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除布局
   * @desc 删除布局
   *
   * @return int num
   */
  public function removeLayout() {
  
    return $this->dm->removeLayout($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 更新布局
   * @desc 更新布局
   *
   * @return int num
   */
  public function updateLayout() {
  
    return $this->dm->updateLayout($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
