<?php
namespace App\Domain;

class AdverDm {

  public function getDetail($data) {
  
    return \App\request('App.Adver.GetDetail', $data);
  
  }

  public function save($data) {
  
    return \App\request('App.Adver.Save', $data);
  
  }

}
