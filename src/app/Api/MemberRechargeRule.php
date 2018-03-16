<?php
namespace App\Api;

/**
 * 用户充值规则接口
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-12-07
 */
class MemberRechargeRule extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            '*' => array(

                'token' => 'token|string|true||管理员令牌',

            ),

            'add' => array(

                'name' => 'name|string|false||充值规则名称',

                'money' => 'money|float|false||指定充值金额',

                'reward_money' => 'reward_money|float|false||奖励金',

                'start_date' => 'start_date|string|false|0|规则有效期开始时间',

                'end_date' => 'end_date|string|false|0|规则有效期结束时间',

                'active' => 'active|int|false|0|规则状态：0，有效；1，失效',

                'priority' => 'priority|int|false||优先级（优先取大）',

                'member_level' => 'member_level|int|false|0|用户等级，0为所有用户',

                'priority' => 'priority|int|false|1|规则优先级',

                'breif' => 'breif|string|false||规则介绍',

                'last_long' => 'last_long|int|false||是否长期有效',

                'min_money' => 'min_money|int|false||最低金额',

                'max_money' => 'max_money|int|false||最高金额',

                'reward_type' => 'reward_type|int|false||奖励类型',

                'reward_percentage' => 'reward_percentage|int|false||奖励百分比',

                'rule_type' => 'rule_type|int|false||规则类型:1.固定金额，2.区间金额',

                'special_type' => 'special_type|int|false||特殊类型'

            ),

            'queryList' => array(

                'id' => 'id|int|false||表序号',

                'name' => 'name|string|false||充值规则名称',

                'money' => 'money|float|false||指定充值金额',

                'reward_money' => 'reward_money|float|false||奖励金',

                'operator_key' => 'operator_key|string|false||操作员编号',

                'start_date' => 'start_date|int|false||规则有效期开始时间戳',

                'end_date' => 'end_date|int|false||规则有效期结束时间戳',

                'active' => 'active|int|false||规则状态：0，有效；1，失效',

                'priority' => 'priority|int|false||优先级（优先取大）',

                'member_level' => 'member_level|int|false||用户等级，0为所有用户',

                'fields' => 'fields|string|false|*|查询字段',

                'order' => 'order|string|false||排序',

                'page' => 'page|int|true|1|页码',

                'page_size' => 'page_size|int|true|20|每页数据条数'

            ),

            'queryCount' => array(

                'id' => 'id|int|false||表序号',

                'name' => 'name|string|false||充值规则名称',

                'money' => 'money|float|false||指定充值金额',

                'min_money' => 'min_money|float|false||最低充值金额',

                'reward_money' => 'reward_money|float|false||奖励金',

                'reward_percentage' => 'reward_percentage|float|false||奖励百分比',

                'reward_type' => 'reward_type|int|false|0|奖励类型：0-无奖励；1-奖励金；2-百分比',

                'operator_key' => 'operator_key|string|false||操作员编号',

                'start_date' => 'start_date|int|false|0|规则有效期开始时间戳',

                'end_date' => 'end_date|int|false|0|规则有效期结束时间戳',

                'active' => 'active|int|false|0|规则状态：0，有效；1，失效',

                'priority' => 'priority|int|false||优先级（优先取大）',

                'member_level' => 'member_level|int|false|0|用户等级，0为所有用户',

                'created_at' => 'created_at|string|false||创建时间',

                'updated_at' => 'updated_at|string|false||修改时间',

            ),

            'update' => array(

                'id' => 'id|int|true||表序号',

                'name' => 'name|string|false||充值规则名称',

                'money' => 'money|float|false||指定充值金额',

                'reward_money' => 'reward_money|float|false||奖励金',

                'operator_key' => 'operator_key|string|false||操作员编号',

                'start_date' => 'start_date|string|false||规则有效期开始时间戳',

                'end_date' => 'end_date|string|false||规则有效期结束时间戳',

                'active' => 'active|int|false||规则状态：0，有效；1，失效',

                'priority' => 'priority|int|false||优先级（优先取大）',

                'member_level' => 'member_level|int|false||用户等级，0为所有用户',

                'active' => 'active|int|false||规则是否启用',

                'last_long' => 'last_long|int|false||是否长期有效',

                'breif' => 'breif|string|false||规则简介',

                'use_time' => 'use_time|int|false||使用次数',

                'min_money' => 'min_money|int|false||最低金额',

                'max_money' => 'max_money|int|false||最高金额',

                'reward_type' => 'reward_type|int|false||奖励类型',

                'reward_percentage' => 'reward_percentage|int|false||奖励百分比',

                'rule_type' => 'rule_type|int|false||规则类型:1.固定金额，2.区间金额'

            ),

            'enable' => array(

                'id' => 'id|int|true||表序号',

            ),

            'disable' => array(

                'id' => 'id|int|true||表序号',

            ),
          
        ));

    }

    /**
     * 新增用户充值规则
     * @desc 新增用户充值规则
     *
     * @return int ret 操作状态：200表示成功
     * @return int data 类型Id
     * @return string msg 错误提示
     */
    public function add() {

        $params = $this->retriveRuleParams('add');

        $regulation = array(

            'token' => 'required',

            'name' => 'required',

        );

        \App\Verification($params, $regulation);

        return $this->dm->add($params);

    }

    /**
     * 用户充值规则启用
     * @desc 用户充值规则启用
     *
     * @return int ret 操作状态：200表示成功
     * @return int data 修改条数
     * @return string msg 错误提示
     */
    public function enable() {

        $condition = $this->retriveRuleParams('enable');

        $regulation = array(

            'token' => 'required',

            'id' => 'required',

        );

        \App\Verification($condition, $regulation);

        return $this->dm->enable($condition);

    }

    /**
     * 用户充值规则禁用
     * @desc 用户充值规则禁用
     *
     * @return int ret 操作状态：200表示成功
     * @return int data 修改条数
     * @return string msg 错误提示
     */
    public function disable() {

        $condition = $this->retriveRuleParams('disable');

        $regulation = array(

            'token' => 'required',

            'id' => 'required',

        );

        \App\Verification($condition, $regulation);

        return $this->dm->disable($condition);

    }

    /**
     * 修改用户充值规则
     * @desc 修改用户充值规则
     *
     * @return int ret 操作状态：200表示成功
     * @return int data 修改条数
     * @return string msg 错误提示
     */
    public function update() {

        $condition = $this->retriveRuleParams('update');

        $regulation = array(

            'token' => 'required',

            'id' => 'required',

        );

        \App\Verification($condition, $regulation);

        return $this->dm->update($condition);

    }

    /**
     * 获取用户充值规则详情
     * @desc 获取用户充值规则详情
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果集
     * @return int data.id 表序号
     * @return string data.name 充值规则名称
     * @return float data.money 指定充值金额
     * @return float data.min_money 最低充值金额
     * @return float data.reward_money 奖励金
     * @return float data.reward_percentage 奖励百分比
     * @return int data.reward_type 奖励类型：0，无奖励；1，奖励金；2，百分比
     * @return string data.operator_key 操作员编号
     * @return string data.start_date 规则有效期开始时间戳
     * @return string data.end_date 规则有效期结束时间戳
     * @return int data.active 规则状态：0，有效；1，失效
     * @return int data.priority 优先级
     * @return string data.created_at 创建时间
     * @return string data.updated_at 更新时间
     * @return int data.use_time 0位不限
     * @return int data.member_level 用户等级，0为所有用户
     * @return string msg 错误提示
     */
    public function getDetail() {

        $condition = $this->retriveRuleParams('getDetail');

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($condition, $regulation);

        return $this->dm->getDetail($condition);

    }

    /**
     * 获取用户充值规则列表
     * @desc 获取用户充值规则列表
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果集
     * @return int data.total 数据总条数
     * @return int data.page 当前页码
     * @return int data.list[] 数据列表
     * @return int data.list[].id 表序号
     * @return string data.list[].name 充值规则名称
     * @return float data.list[].money 指定充值金额
     * @return float data.list[].min_money 最低充值金额
     * @return float data.list[].reward_money 奖励金
     * @return float data.list[].reward_percentage 奖励百分比
     * @return int data.list[].reward_type 奖励类型：0，无奖励；1，奖励金；2，百分比
     * @return string data.list[].operator_key 操作员编号
     * @return string data.list[].start_date 规则有效期开始时间戳
     * @return string data.list[].end_date 规则有效期结束时间戳
     * @return int data.list[].active 规则状态：0，有效；1，失效
     * @return int data.list[].priority 优先级
     * @return string data.list[].created_at 创建时间
     * @return string data.list[].updated_at 更新时间
     * @return int data.list[].use_time 0位不限
     * @return int data.list[].member_level 用户等级，0为所有用户
     * @return string msg 错误提示
     */
    public function queryList() {

        $condition = $this->retriveRuleParams('queryList');

        return $this->dm->queryList($condition);

    }

    /**
     * 获取用户充值规则总数
     * @desc 获取用户充值规则总数
     *
     * @return int ret 操作状态：200表示成功
     * @return int data 总条数
     * @return string msg 错误提示
     */
    public function queryCount() {

        $condition = $this->retriveRuleParams('queryCount');

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($condition, $regulation);

        return $this->dm->queryCount($condition);

    }

}
