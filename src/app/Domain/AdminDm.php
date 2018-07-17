<?php

namespace App\Domain;

/**
 * 管理员模块接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-10-26
 */
class AdminDm {

    /**
     * 管理员登录
     */
    public function login($data) {

        $data_array['username'] = $data['username'];

        $data_array['password'] = $data['password'];

        return \App\request('App.UserAdmin.Login', $data_array);

    }

    /**
     * 管理员注销登录
     */
    public function logout($data) {

        $data_array['uid'] = $data['token'];

        return \App\request('App.User.Logout', $data_array);

    }

    /**
     * 获取管理员信息
     */
    public function getAdmin($data) {

        $data_array['token'] = $data['token'];

        $response = \App\request('App.UserAdmin.GetAdmin', $data_array);

        $response['role'] = $response['admin_group'];

        $response['name'] = $response['admin_name'];

        $response['avatar'] = $response['user_headimg'];

        return $response;

    }

    public function addAcct($data) {
    
        return \App\request('App.UserAdmin.AddAcct', $data);
    
    }

}
