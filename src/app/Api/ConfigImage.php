<?php
namespace App\Api;

/**
 * 图片配置接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-03-01
 */
class ConfigImage extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addImage' => array(
      
        'token' => 'token|string|true||用户令牌',
        'module' => 'module|int|true||所属模块',
        'type' => 'type|int|true||所属类型',
        'url' => 'url|string|true||链接'
      
      ),
    
      'editImage' => array(
      
        'token' => 'token|string|true||用户令牌',
        'id' => 'id|int|true||用户令牌',
        'module' => 'module|int|false||所属模块',
        'type' => 'type|int|false||图片类型',
        'url' => 'url|string|false||图片链接',
        'link_type' => 'link_type|int|false||链接类型',
        'link' => 'link|string|false||跳转链接',
        'display_order' => 'display_order|int|false||排序',
        'state' => 'state|int|false||图片状态'
      
      ),

      'getList' => array(
      
        'token' => 'token|string|true||用户令牌',
        'module' => 'module|int|false||所属模块',
        'type' => 'type|int|false||图片类型',
        'state' => 'state|int|false||图片状态'
      
      ),

      'remove' => array(
      
        'token' => 'token|string|true||用户令牌',
        'id' => 'id|int|true||图片id'
      
      ),
    
    )); 
  
  }

  /**
   * 新增配置图片
   *
   * @return int id
   */
  public function addImage() {
  
    return $this->dm->addImage($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 新增配置图片
   *
   * @return int id
   */
  public function editImage() {
  
    return $this->dm->editImage($this->retriveRuleParams(__FUNCTION__));
  
  }


  /**
   * 新增配置图片
   *
   * @return int id
   */
  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 新增配置图片
   *
   * @return int id
   */
  public function remove() {
  
    return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
  
  }
}
