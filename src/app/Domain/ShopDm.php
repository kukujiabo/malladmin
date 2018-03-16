<?php

namespace App\Domain;

/**
 * 店铺接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-04
 */
class ShopDm {

    /**
     * 添加
     */
    public function add($params) {

        unset($params['token']);

        return \App\request('App.Shop.Add', $params);

    }

    /**
     * 获取列表 */
    public function queryList($conditions) {

        unset($conditions['token']);

        return \App\request('App.Shop.QueryList', $conditions);

    }

    /**
     * 获取详情
     */
    public function getDetail($conditions) {

        unset($conditions['token']);

        return \App\request('App.Shop.GetDetail', $conditions);

    }

    /**
     * 获取总数
     */
    public function queryCount($conditions) {

        unset($conditions['token']);

        return \App\request('App.Shop.QueryCount', $conditions);

    }

    /**
     * 编辑
     */
    public function update($data) {

        return \App\request('App.Shop.Update', $data);

    }

    /**
     * 启用规则
     */
    public function enable($conditions) {

        return \App\request('App.Shop.Enable', $conditions);

    }

    /**
     * 禁用规则
     */
    public function disable($conditions) {

        return \App\request('App.Shop.Disable', $conditions);

    }

}
