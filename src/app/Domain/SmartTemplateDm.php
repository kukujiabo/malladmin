<?php
namespace App\Domain;

class SmartTemplateDm {

  public function create($data) {
  
    return \App\request('App.SmartTemplate.Create', $data);
  
  }

  public function getList($data) {
  
    return \App\request('App.SmartTemplate.GetList', $data);
  
  }

}
