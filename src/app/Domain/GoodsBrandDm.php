<?php
namespace App\Domain;

/**
 * 商品品牌处理域
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-26
 */
class GoodsBrandDm {

  /**
   * 添加品牌
   *
   * @param array $data
   *
   * @return int id
   */
  public function addBrand($data) {
  
    return \App\request('App.GoodsBrand.AddBrand', $data);
  
  }

  /**
   * 更新品牌
   *
   * @param array $data
   *
   * @return int num
   */
  public function updateBrand($data) {
  
    return \App\request('App.GoodsBrand.UpdateBrand', $data);
  
  }

  /**
   * 列表查询
   *
   * @param array $data
   *
   * @return array list
   */
  public function listQuery($data) {
  
    return \App\request('App.GoodsBrand.listQuery', $data);
  
  }

  /**
   * 删除品牌
   *
   * @param array $data
   *
   * @return boolean true/false
   */
  public function removeBrand($data) {
  
    return \App\request('App.GoodsBrand.removeBrand', $data);
  
  }

  /**
   * 城市展示品牌列表
   *
   */
  public function cityList($data) {
  
    return \App\request('App.GoodsBrand.CityList', $data);
  
  }

}
