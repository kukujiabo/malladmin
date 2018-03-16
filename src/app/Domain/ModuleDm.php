<?php
namespace App\Domain;

class ModuleDm {

  public function getList($params) {
  
    return \App\request('App.Module.getAllList', $params); 
  
  }

  public function show($params) {
  
    return \App\request('App.Module.show', $params);
  
  }

  public function hide($params) {
  
    return \App\request('App.Module.hide', $params);
  
  }

}
