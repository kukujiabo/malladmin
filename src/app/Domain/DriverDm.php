<?php
namespace App\Domain;

class DriverDm {

  public function create($params) {
  
    return \App\request('App.Driver.Create', $params); 
  
  }

  public function getList($params) {
  
    return \App\request('App.Driver.GetList', $params); 
  
  }

}
