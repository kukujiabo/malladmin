<?php
namespace App\Domain;

/**
 * 供应商
 */
class Provider {

  public function addProvider($data) {
  
    return \App\request('App.Provider.AddProvider', $data); 
  
  }

}
