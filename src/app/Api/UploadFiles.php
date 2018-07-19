<?php
namespace App\Api;

/**
 * 文件上传接口
 *
 * @author Meroc Chen
 */
class UploadFiles extends BaseApi {

  public function getRules() {
  
    return $this->rules(array(
    
      'uploadPriceData' => array(
      
        'upfile' => [
                  
           'name' => 'upfile',
           'type' => 'file',
           'min' => 0,
           'max' => 1024 * 1024 * 1024,
           'range' => [ 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel' ],
           'ext' => [ 'xlsx', 'xls' ]
                                                                       
        ],

        'city_code' => 'city_code|int|true||城市id'
      
      )
    
    ));
  
  }

  /**
   * 上传价格数据
   * @desc 上传价格数据
   *
   * @return
   */
  public function uploadPriceData() {
  
    return $this->dm->uploadPriceData($this->retriveRuleParams(__FUNCTION__)); 
  
  }

}
