<?php
namespace App\Api;

/**
 * 微信回复消息接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-01-12
 */ 
class WechatResponseMessage extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
      
      'editDefaultMessage' => array(
      
        'token' => 'token|string|true||用户令牌',
      
        'text' => 'text|string|true||文本内容'
      
      ),

      'getDefaultMessage' => array(
      
        'token' => 'token|string|true||用户访问令牌'
      
      ),
    
      'editResponseMessage' => array(
      
        'token' => 'token|string|true||用户令牌',
      
        'text' => 'text|string|true||文本内容'
      
      ),

      'getKeywordList' => array(
      
        'token' => 'token|string|true||用户访问令牌'
      
      ),

      'addKeywordResponse' => array(
      
        'token' => 'token|string|true||用户访问令牌',

        'kname' => 'kname|string|true||配置键值，随机数，不可重复',

        'keyword' => 'keyword|string|true||关键字',

        'ext_1' => 'ext_1|string|true||回复内容'
      
      ),

      'deleteKeyword' => array(
      
        'token' => 'token|string|true||用户访问令牌',

        'id' => 'id|int|true||删除关键字'
      
      ),

      'getFocusResponse' => array(
      
        'token' => 'token|string|true||用户访问令牌',
      
      ),

      'getUserReply' => array(
      
        'token' => 'token|string|true||用户令牌',

        'nickname' => 'nickname|string|true||用户令牌',
      
      )
    
    )); 
  
  }

  /**
   * 编辑关注自动回复
   * @desc 编辑关注自动回复
   *
   * @return int num
   */
  public function editResponseMessage() {
  
    return $this->dm->editResponseMessage($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 编辑任意字自动回复
   * @desc 编辑任意字自动回复
   *
   * @return int num
   */
  public function editDefaultMessage() {
  
    return $this->dm->editDefaultMessage($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询任意字默认回复
   * @desc 查询任意字默认回复
   *
   * @return string 
   */
  public function getDefaultMessage() {
  
    return $this->dm->getDefaultMessage($this->retriveRuleParams(__FUNCTION__)); 

  }

  /**
   * 添加关键字回复
   * @desc 添加关键字回复
   *
   * @return int num
   */
  public function addKeywordResponse() {
  
    return $this->dm->addKeywordResponse($this->retriveRuleParams(__FUNCTION__));  
  
  }

  /**
   * 获取关键字列表
   * @desc 获取关键字列表
   *
   * @return array $list
   */
  public function getKeywordList() {
  
    return $this->dm->getKeywordList($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除关键字
   * @desc 删除关键字
   *
   * @return boolean true/false
   */
  public function deleteKeyword() {
  
    return $this->dm->deleteKeyword($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 获取关注后自动回复内容
   * @desc 获取关注后自动回复内容
   *
   * @return array info
   */
  public function getFocusResponse() {
  
    return $this->dm->getFocusResponse();
  
  }

  /**
   * 获取用户回复信息
   * @desc 获取用户回复信息
   *
   * @return array list
   */
  public function getUserReply() {
  
    return $this->dm->getUserReply($this->retriveRuleParams(__FUNCTION__));
  
  }

}

