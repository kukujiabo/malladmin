<?php
namespace App\Domain;

class UploadFilesDm {

  public function uploadPriceData($data) {
  
    $newData = [
    
      'city_code' => $data['city_code'],
    
      'file_path' => $_FILES['upfile']['tmp_name'],

      'orig_name' => $_FILES['upfile']['name']
    
    ];

    return \App\request('App.GoodsPriceMap.ImportData', $newData);
  
  }

  public function UploadProviderPrice($data) {
  
    $newData = [
    
      'provider_id' => $data['provider_id'],
    
      'file_path' => $_FILES['upfile']['tmp_name'],

      'orig_name' => $_FILES['upfile']['name']
    
    ];

    return \App\request('App.GoodsProviderCos.ImportData', $newData);
  
  }

}
