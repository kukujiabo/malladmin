<?php
namespace App\Domain;

/**
 * 获取微信公众号素材
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-20
 */
class WechatArticleDm {

  /**
   * 获取微信公众号素材
   */
  public function getMaterial($data) {

    return \App\request('App.WechatArticle.getMaterial', $data);
  
  }

}