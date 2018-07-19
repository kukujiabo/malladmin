<?php
namespace App\Api;

/**
 * 上传文件
 *
 * @author Meroc Chen
 */
class UploadFiles extends BaseApi {

  public function getRules() {
  
    return $this->rules([
    
      'uploadPriceData' => [
      
        'upfile' => [
        
          'name' => 'upfile',
          'type' => 'file',
          'min' => 0,
          'max' => 1024 * 1024 * 1024,
          'range' => [ 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', 'application/vnd.ms-excel' ],
          'ext' => [ 'xlsx', 'xls' ]
        
        ],

        'city_code' => 'city_code|int|true||城市id'
      
      ]


    ]);
  
  }

  /**
   * 上传文件
   * @desc 上传文件
   *
   * @return array data
   */
  public function uploadPriceData() {
  
    return $this->dm->upload($this->retriveRuleParams(__FUNCTION__)); 
  
  }


}
