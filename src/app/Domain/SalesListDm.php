<?php
namespace App\Domain;

class SalesListDm {

  public function getList($data) {
  
    return \App\request('App.SalesList.GetList', $data); 
  
  }

}
