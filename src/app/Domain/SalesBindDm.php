<?php
namespace App\Domain;

class SalesBindDm {

  public function addBindings($data) {
  
    return \App\request('App.SalesBind.AddBindings', $data);
  
  }

  public function unbind($data) {
  
    return \App\request('App.SalesBind.Unbind', $data);
  
  }

}
