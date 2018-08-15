<?php
namespace App\Domain;

class NewBounDm {

  public function create($data) {
  
    return \App\request('App.NewBoun.Create', $data);
  
  }

  public function getAll($data) {
  
    return \App\request('App.NewBoun.GetAll', $data);
  
  }

  public function removeBoun($data) {
  
    return \App\request('App.NewBoun.RemoveBoun', $data);
  
  }

}
