<?php
namespace App\Api;

use PhalApi\Api;
use App\Domain\MemberDm;

/**
 * 会员接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-10-30
 *
 */
class Member extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            '*' => array(
                'token'  => array('name' => 'token', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '管理员令牌'),
            ),

            'queryList' => array(
                'uid'  => array('name' => 'uid', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '用户id'),
                'user_name'  => array('name' => 'user_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '帐号（手机号码）'),
                'real_name'  => array('name' => 'real_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '真实姓名'),
                'nick_name'  => array('name' => 'nick_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '昵称'),
                'birthday'  => array('name' => 'birthday', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '生日'),
                'location'  => array('name' => 'location', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '所在地'),
                'sex'  => array('name' => 'sex', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '性别 0-保密 1-男 2-女'),
                'user_tel_bind' => 'user_tel_bind|int|false||手机号是否绑定 0 未绑定 1 绑定',
                'is_system' => 'is_system|int|false||是否是系统后台管理员 0-不是 1-是',
                'is_member' => 'is_member|int|false||是否是前台会员 0-不是 1-是',
                'reg_time' => 'reg_time|string|false||注册时间',
                'fields' => 'fields|string|false|*|查询字段',
                'order' => 'order|string|false||排序',
                'page' => 'page|int|true|1|页码',
                'page_size' => 'page_size|int|true|20|每页数据条数',
            ),

            'update' => array(
                'uid'  => array('name' => 'uid', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '用户id'),
                'user_name'  => array('name' => 'user_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '帐号（手机号码）'),
                'user_password'  => array('name' => 'user_password', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '密码明文'),
                'user_headimg'  => array('name' => 'user_headimg', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '用户头像'),
                'real_name'  => array('name' => 'real_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '真实姓名'),
                'nick_name'  => array('name' => 'nick_name', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '昵称'),
                'birthday'  => array('name' => 'birthday', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '生日'),
                'location'  => array('name' => 'location', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '所在地'),
                // 'card'  => array('name' => 'card', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '身份证'),
                'sex'  => array('name' => 'sex', 'type' => 'string', 'require' => false, 'default' => '', 'desc' => '性别 0-保密 1-男 2-女'),
            ),

            'getDetails' => array(
                'uid'  => array('name' => 'uid', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '用户id'),
            ),

            'memberUnionInfo' => array(
               'token' => 'token|string|true||用户令牌',
               'member_name' => 'member_name|string|false||会员名称',
               'member_level' => 'member_level|string|false||会员等级',
               'user_tel' => 'user_tel|string|false||会员手机号',
               'card_id' => 'card_id|string|false||会员卡号',
               'reg_start_time' => 'reg_start_time|string|false||注册结束时间',
               'reg_end_time' => 'reg_end_time|string|false||注册结束时间',
               'page' => 'page|string|false||页码',
               'pageSize' => 'pageSize|string|false||每页条数'
            ),

            'memberIncrease' => array(

               'reg_date' => 'reg_date|string|true||日期（例：eg|2018-01-14;el|2018-01-15）',

            ),

        ));

    }

    /**
     * 会员每日新增统计表
     * @desc 会员每日新增统计表
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果集
     * @return int data[].num 新增数量
     * @return string data[].reg_date 日期
     * @return string msg 错误提示
     */
    public function memberIncrease() {

        $conditions = $this->retriveRuleParams('memberIncrease');

        $regulation = array(

            'token' => 'required',

            'reg_date' => 'required',
            
        );

        \App\Verification($conditions, $regulation);

        return $this->dm->memberIncrease($conditions);

    }

    /**
     * 获取会员列表
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function queryList() {

        $conditions = $this->retriveRuleParams('queryList');

        $regulation = array(

            'token' => 'required',

            'page' => 'required',

            'page_size' => 'required',
            
        );

        \App\Verification($conditions, $regulation);

        return $this->dm->queryList($conditions);

    }

    /**
     * 修改会员信息
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function update() {

        $conditions = $this->retriveRuleParams('update');

        $regulation = array(

            'token' => 'required',

            'uid' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->update($conditions);

    }

    /**
     * 获取会员详情
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function getDetails() {

        $conditions = $this->retriveRuleParams('getDetails');

        $regulation = array(
            
            'token' => 'required',

            'uid' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->getDetails($conditions);

    }

    /**
     * 获取会员联合系信息
     * @desc 会员联合信息
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
    public function memberUnionInfo() {
    
        $conditions = $this->retriveRuleParams('memberUnionInfo');

        $regulation = array(
            
            'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->memberUnionInfo($conditions);
    
    }

}
