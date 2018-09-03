<?php
namespace App\Domain;

class WechatResponseMessageDm {

  public function editResponseMessage($params) {
  
    return \App\request('App.WechatResponseMessage.EditResponseMessage', $params);
  
  }

  public function addKeywordResponse($params) {
  
    return \App\request('App.WechatResponseMessage.AddKeywordResponse', $params);
  
  }

  public function getKeywordList($params) {
  
    return \App\request('App.WechatResponseMessage.GetKeywordList', $params);
  
  }

  public function deleteKeyword($params) {
  
    return \App\request('App.WechatResponseMessage.deleteKeyword', $params);
  
  }

  public function getFocusResponse() {
  
    return \App\request('App.WechatResponseMessage.GetFocusResponse');
  
  }

  public function getUserReply($params) {
  
    return \App\request('App.WechatResponseMessage.GetUserMessage', $params);
  
  }

}
