<?php
namespace App\Api;

/**
 * 销售列表api
 *
 * @author Meroc Chen <398515393@qq.com>
 */
class SaleList extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'getList' => array(
      
        'manager_account' => 'manager_account|string|true||销售总监账号',
        'page' => 'page|int|false||页码',
        'page_size' => 'page_size|int|false||每页条数'
      
      )
    
    )); 
  
  }

  public function getList() {
  
    return $this->dm->getList($this->retriveRuleParams(__FUNCTION__));
  
  }

}
