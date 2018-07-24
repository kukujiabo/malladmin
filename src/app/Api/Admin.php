<?php
namespace App\Api;

use App\Domain\AdminDm;

/**
 * 管理员接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-10-30
 *
 */
class Admin extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            'login' => array(

                'username' => 'username|string|true||帐号',

                'password' => 'password|string|true||密码明文',

            ),

            'logout' => array(

                'token' => 'token|string|true||管理员令牌',

            ),

            'getAdmin' => array(

                'token' => 'token|string|true||管理员令牌',

            ),

            'update' => array(

                'token' => 'token|string|true||管理员令牌',

            ),

            'addAcct' => [
            
              'token' => 'token|string|true||后台管理员令牌',
            
              'account' => 'account|string|true||后台管理员令牌',
            
              'password' => 'password|string|true||后台管理员令牌',

              'auth' => 'auth|string|true||后台管理员令牌',

              'city_code' => 'city_code|string|true||后台管理员令牌'
            
            ],

            'getSysAdminList' => array(
            
              'token' => 'token|string|true||后台管理员令牌',
              'user_name' => 'user_name|string|false||后台管理员令牌',
              'auth' => 'auth|string|false||后台管理员令牌',
              'city_code' => 'city_code|string|false||后台管理员令牌',
              'page' => 'page|int|false||查询页码',
              'page_size' => 'page_size|int|false||每页条数',
            
            ),

            'getSalesManager' => array(
            
              'token' => 'token|string|true||后台管理员令牌'
            
            )

        ));

    }

    /**
     * 获取管理员数据
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data[] 
     * @return string msg 错误提示
     */
    public function getAdmin() {

        $conditions = $this->retriveRuleParams('getAdmin');

        $regulation = array(

          'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->getAdmin($conditions);

    }

    /**
     * 后台管理员登录接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function login() {

        $conditions = $this->retriveRuleParams('login');

        return $this->dm->login($conditions);

    }

    /**
     * 后台管理员注销登录接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function logout() {

        $conditions = $this->retriveRuleParams('logout');

        $regulation = array(

          'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->logout($conditions);

    }

    /**
     * 新增管理员账号接口
     * @desc 新增管理员账号接口
     *
     * @return int id
     */
    public function addAcct() {
    
      return $this->dm->addAcct($this->retriveRuleParams(__FUNCTION__));
    
    }

    /**
     * 查询管理员列表
     * @desc 查询管理员列表
     *
     * @return array 
     */
    public function getSysAdminList() {
    
      return $this->dm->getSysAdminList($this->retriveRuleParams(__FUNCTION__));
    
    }

    /**
     * 查询销售总监
     * @desc 查询销售总监
     *
     * @return array
     */
    public function getSalesManager() {
    
      return $this->dm->getSalesManager($this->retriveRuleParams(__FUNCTION__));
    
    }

}
