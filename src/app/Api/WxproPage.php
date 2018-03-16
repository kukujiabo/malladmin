<?php
namespace App\Api;

/** 
 * 微信小程序页面配置接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-07
 */
class WxproPage extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'getCrmPageConfigs' => array(
      
        'token' => 'token|string|true||管理员令牌',
      
        'page_code' => 'page_code|string|false||页面编码'
      
      ),
    
      'getCrmPageBoundConfigs' => array(
      
        'token' => 'token|string|true||管理员令牌',
      
        'page_code' => 'page_code|string|false||页面编码'
      
      ),

      'WxproPageConfigUpdate' => array(
      
        'token' => 'token|string|true||管理员令牌',

        'id' => 'id|int|true||配置id',

        'content' => 'content|string|true||配置内容',

        'type' => 'type|string|true||配置类型'
      
      ),

      'getPageList' => array(
      
        'token' => 'token|string|true||用户令牌',

        'mini_code' => 'mini_code|string|false||小程序编码',

        'page_name' => 'page_name|string|false||小程序页面名称',

      ),

      'add' => array(
      
        'token' => 'token|string|true||用户令牌',

        'mini_code' => 'mini_code|string|true||小程序编码',

        'page_name' => 'page_name|string|true||小程序名称',

        'page_code' => 'page_code|string|true||页面编码',

        'page_url' => 'page_url|string|true||页面路径',

        'module' => 'module|string|true||所属模块',

        'active' => 'active|int|true||启用状态'
        
      )

    ));
  
  }

  /**
   * 获取crm小程序页面配置
   * @desc 获取crm小程序页面配置
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function getCrmPageConfigs() {

    $data = $this->retriveRuleParams('getCrmPageConfigs');
  
    return $this->dm->getCrmPageConfigs($data);
  
  }

  /**
   * 获取crm小程序页面和页面配置
   * @desc 获取crm小程序和页面配置
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function getCrmPageBoundConfigs() {

    $data = $this->retriveRuleParams('getCrmPageBoundConfigs');
  
    return $this->dm->getCrmPageBoundConfigs($data);
  
  }

  /**
   * 更新微信小程序页面配置
   * @desc 更新微信小程序页面配置
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function WxproPageConfigUpdate() {

    $data = $this->retriveRuleParams('WxproPageConfigUpdate');

    return $this->dm->WxproPageConfigUpdate($data);
  
  }

  /**
   * 获取页面列表
   * @desc 获取页面列表
   *
   * @return int ret 操作状态：200表示成功
   * @return array data
   * @return string msg 错误提示
   */
  public function getPageList() {
  
    return $this->dm->getPageList($this->retriveRuleParams(__FUNCTION__)); 
  
  }

  /**
   * 添加页面
   * @desc 添加页面
   *
   * @return int ret 操作状态：200表示成功
   * @return int num 添加条数
   * @return string msg 错误提示
   */
  public function add() {
  
    return $this->dm->add($this->retriveRuleParams(__FUNCTION__));
  
  }

}

