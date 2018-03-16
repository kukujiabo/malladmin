<?php
namespace App\Api;

/**
 * 微信接口
 *
 * @author Meroc Chen <398515393@qq.com> 2017-12-17
 */
class Wechat extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'create' => array(
      
        'token' => 'token|string|true||用户令牌',

        'menus' => 'menus|string|true||菜单信息',
      
      ),
    
      'getMenu' => array(
      
        'token' => 'token|string|true||用户令牌'
      
      ),

      'addAutoResponse' => array(

        'token' => 'token|string|true||用户令牌',
      
        'text' => 'text|string|true||自动回复内容'
      
      )
    
    ));
  
  }


  /**
   * 创建微信公众号菜单
   * @desc 创建微信公众号菜单
   *
   * @return boolean true/false
   */
  public function create() {
  
    $data = $this->retriveRuleParams(__FUNCTION__);

    return $this->dm->create($data);
  
  }

  /**
   * 拉取微信公众号菜单
   * @desc 拉取微信公众号菜单
   *
   * @return list $menu
   */
  public function getMenu() {

    $data = $this->retriveRuleParams(__FUNCTION__); 
    
    return $this->dm->getMenu($data);
  
  }

  /**
   * 微信自动回复
   * @desc 微信自动回复
   *
   * @return array $info
   */
  public function addAutoResponse() {
  
    return $this->dm->addAutoResponse($this->retriveRuleParams(__FUNCTION__));
  
  }

}
