<?php
namespace App\Domain;

class DataManagerDm {

  public function create($data) {
  
    return \App\request('App.DataManager.Create', $data); 
  
  }

  public function getList($data) {
  
    return \App\request('App.DataManager.GetList', $data); 
  
  }

  public function removeManager($data) {
  
    return \App\request('App.DataManager.RemoveManager', $data);
  
  }

}
