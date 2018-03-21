<?php
namespace App\Domain;

/**
 * 全国行政区操作
 */
class NationWideAreaDm {

  /**
   * 获取级联地区列表
   */
  public function cascadeList($data = array()) {
  
    return \App\request('App.NationwideArea.CascadeList', $data);
  
  }

  /**
   * 启用地区
   */
  public function enable($data) {
  
    $updateData = array(
    
      'id' => $data['id'],

      'active' => 1
    
    );

    return \App\request('App.NationwideArea.update', $updateData);
  
  }

  /**
   * 禁用地区
   */
  public function disable($data) {
  
    $updateData = array(
    
      'id' => $data['id'],

      'active' => 0
    
    );

    return \App\request('App.NationwideArea.update', $updateData);
  
  }

  /**
   * 获取城市数据
   */
  public function getCity() {
  
    return \App\request('App.NationwideArea.QueryCity', array());
  
  }

}
