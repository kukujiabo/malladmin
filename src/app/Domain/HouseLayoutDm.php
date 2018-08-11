<?php
namespace App\Domain;

class HouseLayoutDm {

  public function create($data) {
  
    return \App\request('App.HouseLayout.Create', $data); 
  
  }

  public function getAll($data) {
  
    return \App\request('App.HouseLayout.GetAll', $data); 
  
  }

}
