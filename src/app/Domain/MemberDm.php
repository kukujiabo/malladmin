<?php

namespace App\Domain;

/**
 * 会员模块接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-10-31
 */
class MemberDm {

    /**
     * 会员每日新增统计表
     */
    public function memberIncrease($data) {

        unset($data['token']);

        return \App\request('App.Member.MemberIncrease', $data);

    }

    /**
     * 获取会员列表
     */
    public function queryList($data) {

        unset($data['token']);

        return \App\request('App.User.QueryList', $data);

    }

    /**
     * 修改会员信息
     */
    public function update($data) {

        $data['way'] = 2;

        unset($data['token']);

        return \App\request('App.User.Update', $data);

    }
  
    /**
     * 获取会员详情
     */
    public function getDetails($data){

        $data['way'] = 2;

        unset($data['token']);

        return \App\request('App.User.GetUser', $data);

    }

    /**
     * 获取会员联合信息
     */
    public function memberUnionInfo($data) {
    
      return \App\request('App.Member.MemberUnionInfo', $data);
    
    }

}
