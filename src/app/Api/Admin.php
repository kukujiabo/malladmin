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

}