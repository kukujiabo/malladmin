<?php
namespace App\Domain;

/**
 * 商品分类接口
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2018-01-02
 */
class GoodsCategoryDm {

  /**
   * 添加商品分类
   */
  public function add($params) {
  
    return \App\request('App.GoodsCategory.Add', $params);
  
  }

  /**
   * 显示分类
   */
  public function show($data) {

    $update = array(
      
      'category_id' => $data['category_id'],
    
      'is_visible' => 1,
    
    );
  
    return \App\request('App.GoodsCategory.Update', $update);
  
  }

  /**
   * 隐藏分类
   */
  public function hide($data) {

    $update = array(
      
      'category_id' => $data['category_id'],
    
      'is_visible' => 0,
    
    );
  
    return \App\request('App.GoodsCategory.Update', $update);
  
  }

  /**
   * 编辑商品分类
   */
  public function update($data) {

    return \App\request('App.GoodsCategory.Update', $data);
  
  }

  /**
   * 获取商品分类列表
   */
  public function queryList($data) {

    return \App\request('App.GoodsCategory.QueryList', $data);
  
  }

  /**
   * 获取商品分类详情
   */
  public function getDetail($data) {

    return \App\request('App.GoodsCategory.GetDetail', $data);
  
  }

  /**
   * 获取全部商品分类
   */
  public function getAll($data) {

    return \App\request('App.GoodsCategory.GetAll', $data);
  
  }

  /**
   *
   */
  public function remove($data) {

    return \App\request('App.GoodsCategory.Remove', $data);
  
  }

}
