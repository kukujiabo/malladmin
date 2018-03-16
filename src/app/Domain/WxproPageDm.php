<?php
namespace App\Domain;

/**
 * 获取crm微信小程序页面配置
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-07
 */
class WxproPageDm {

  /**
   * 获取crm页面配置
   *
   */
  public function getCrmPageConfigs($data) {

    return \App\request('App.WxproPage.GetCrmPageConfigs', $data);
  
  }

  /**
   * 获取crm小程序页面和页面配置
   */
  public function getCrmPageBoundConfigs($data) {

    return \App\request('App.WxproPage.GetCrmPageBoundConfigs', $data);
  
  }

  /**
   * 更新crm小程序页面配置
   */
  public function WxproPageConfigUpdate($data) {
  
    return \App\request('App.WxproPageConfig.UpdatePageConfigs', $data);
  
  }

  /**
   * 获取小程序列表接口
   */
  public function getPageList($data) {
  
    return \App\request('App.WxproPage.GetPageList', $data);
  
  }

  /**
   * 添加页面
   */
  public function add($data) {
  
    return \App\request('App.WxproPage.Add', $data);
  
  }

}
