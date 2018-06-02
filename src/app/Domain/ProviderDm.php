<?php
namespace App\Domain;

/**
 * 供应商
 */
class ProviderDm {

  public function addProvider($data) {
  
    return \App\request('App.Provider.AddProvider', $data); 
  
  }

  public function getList($data) {
  
    return \App\request('App.Provider.GetList', $data);
  
  }

  public function getAll($data) {
  
    return \App\request('App.Provider.GetAll', $data);
  
  }

  public function getDetail($data) {
  
    return \App\request('App.Provider.GetDetail', $data);
  
  }

}
