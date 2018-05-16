<?php
namespace App\Domain;

/**
 * 项目经理
 *
 */
class ManagerDm {

  public function addManager($data) {
  
    return \App\request('App.Manager.AddManager', $data);
  
  }

  public function getList($data) {
  
    return \App\request('App.Manager.GetList', $data);
  
  }

  public function getAll($data) {
  
    return \App\request('App.Manager.GetAll', $data);
  
  }

}
