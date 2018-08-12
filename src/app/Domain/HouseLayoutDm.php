<?php
namespace App\Domain;

class HouseLayoutDm {

  public function create($data) {
  
    return \App\request('App.HouseLayout.Create', $data); 
  
  }

  public function getAll($data) {
  
    return \App\request('App.HouseLayout.GetAll', $data); 
  
  }

  public function getDetail($data) {
  
    return \App\request('App.HouseLayout.GetDetail', $data); 
  
  }

  public function removeLayout($data) {
  
    return \App\request('App.HouseLayout.RemoveLayout', $data);
  
  }

  public function updateLayout($data) {
  
    return \App\request('App.HouseLayout.UpdateLayout', $data); 
  
  }

}
