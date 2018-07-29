<?php
namespace App\Domain;

class DriverDm {

  public function create($params) {
  
    reture \App\request('Domain/DriverDm.php', $params); 
  
  }

  public function getList($params) {
  
    return \App\request('App.Driver.GetList', $params); 
  
  }

}
