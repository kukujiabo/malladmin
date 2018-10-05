<?php
namespace App\Api;


/** 
 * 商品品牌接口
 *
 * @author Meroc Chen <398515393@qq.com> 2018-02-26
 */
class GoodsBrand extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'addBrand' => array(

        'token' => 'token|string|true||用户令牌',
        'brand_name' => 'brand_name|string|true||品牌名称',
        'brand_code' => 'brand_code|string|true||品牌代码',
        'brand_avatar' => 'brand_avatar|string|true||品牌logo',
        'category_id' => 'category_id|int|true||分类id',
        'introduction' => 'introduction|string|false||品牌介绍',
        'brand_state' => 'brand_state|int|true||品牌状态',
        'index_show' => 'index_show|int|false||首页展示',
        'cities' => 'cities|string|false||城市'
      
      ),

      'updateBrand' => array(

        'token' => 'token|string|true||用户令牌',
        'id' => 'id|int|true||品牌id',
        'brand_name' => 'brand_name|string|false||品牌名称',
        'brand_avatar' => 'brand_avatar|string|false||品牌logo',
        'category_id' => 'category_id|int|false||分类id',
        'index_show' => 'index_show|int|false||首页展示',
        'introduction' => 'introduction|string|false||品牌介绍',
        'cities' => 'cities|string|false||城市'
      
      ),

      'cityList' => array(
      
        'city_code' => 'city_code|string|true||城市编码',
        'all' => 'all|int|false|0|是否查询全部',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ),

      'listQuery' => array(
      
        'token' => 'token|string|true||用户令牌',
        'brand_name' => 'brand_name|string|false||品牌名称',
        'brand_code' => 'brand_code|string|false||品牌代码',
        'brand_state' => 'brand_state|int|false||品牌状态',
        'index_show' => 'index_show|int|false||首页展示',
        'category_id' => 'category_id|int|false||分类id',
        'all' => 'all|int|false|0|是否查询全部',
        'page' => 'page|int|false|1|页码',
        'page_size' => 'page_size|int|false|20|每页条数'
      
      ),

      'removeBrand' => array(
      
        'token' => 'token|string|true||用户令牌',
        'id' => 'id|int|true||品牌id'
      
      )
    
    ));
  
  }

  /**
   * 添加品牌
   * @desc 添加品牌
   *
   * @return int id
   */
  public function addBrand() {
  
    return $this->dm->addBrand($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 更新品牌
   * @desc 更新品牌
   *
   * @return int num
   */
  public function updateBrand() {
  
    return $this->dm->updateBrand($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 查询列表
   * @desc 查询列表
   *
   * @return array data
   */
  public function listQuery() {
  
    return $this->dm->listQuery($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 删除品牌
   * @desc 删除品牌
   *
   * @return boolean true/false
   */
  public function removeBrand() {
  
    return $this->dm->removeBrand($this->retriveRuleParams(__FUNCTION__));
  
  }

  /**
   * 城市列表
   * @desc 城市列表
   *
   * @return array list
   */
  public function cityList() {
  
    return $this->dm->cityList($this->retriveRuleParams(__FUNCTION__));  
  
  }

}
