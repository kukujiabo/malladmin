<?php

namespace App\Filter;

use PhalApi\Filter;
use PhalApi\Exception;

class AuthorityFilter implements Filter {

    public function check() {

        $token = \PhalApi\DI()->request->get('token');

        $service = \PhalApi\DI()->request->get('service');

        // 排除登录和注销的接口
        if ($service != 'App.Admin.Login' && $service != 'App.Admin.Logout' && $service != 'App.Qiniu.GetUploadToken' && $service != 'App.OrderTakeOut.AsyncRecall') {

            if (!$token) {

                throw new Exception('权限认证失败：请获取访问令牌！', 9002);
            }
            
            $data['token'] = $token;

            $info = \App\request('App.UserAdmin.GetAdmin', $data);

            if (empty($info)) {
            
              throw new Exception('请重新登录！', 9003);
            
            }

            $is_group = false;

            foreach ($info['admin_group'] as $v) {

                // 超级管理员权限
                if ($v == 'admin') {

                    $is_group = true;

                }

            }

            //if ((!$info['jurisdiction'] || !in_array($service, $info['jurisdiction'])) && $is_group != true) {

            //    throw new Exception('权限不足！', 9001);

            //}

        }

    }

}
