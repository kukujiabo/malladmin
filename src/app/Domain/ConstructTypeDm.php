<?php
namespace App\Domain;

class ConstructTypeDm {

  public function create($data) {
  
    return \App\request('App.ConstructType.Create', $data);
  
  }

  public function getAll($data) {

    return \App\request('App.ConstructType.GetAll', $data);
  
  }

  public function getDetail($data) {
  
    return \App\request('App.ConstructType.GetDetail', $data);
  
  }

  public function updateConstruct($data) {
  
    return \App\request('App.ConstructType.UpdateConstruct', $data);
  
  }

  public function removeConstruct($data) {
  
    return \App\request('App.ConstructType.RemoveConstruct', $data);
  
  }

}
