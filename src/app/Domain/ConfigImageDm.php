<?php
namespace App\Domain;

class ConfigImageDm {

  public function addImage($params) {
  
    return \App\request('App.ConfigImage.AddImage', $params);
  
  }

  public function editImage($params) {
  
    return \App\request('App.ConfigImage.EditImage', $params);
  
  }

  public function getList($params) {
  
    return \App\request('App.ConfigImage.GetList', $params);
  
  }

  public function remove($params) {
  
    return \App\request('App.ConfigImage.Remove', $params);
  
  }

}
