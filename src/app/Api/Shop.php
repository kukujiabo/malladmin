<?php
namespace App\Api;

use App\Domain\ShopDm;

/**
 * 店铺接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2017-11-14
 *
 */
class Shop extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            '*' => array(

                'token' => 'token|string|true||管理员令牌',

            ),

            'add' => array(

                'shop_name' => 'shop_name|string|true||店铺名称',

                'shop_code' => 'shop_code|string|true||店铺编码',

                'shop_banner' => 'shop_banner|string|false||店铺主图',

                'shop_phone' => 'shop_phone|string|true||店铺电话',

                'content' => 'content|string|false||店铺图文详情',

                'province_id' => 'province_id|int|true||店铺所在省份ID',

                'city_id' => 'city_id|int|true||店铺所在市ID',

                'district_id' => 'district_id|int|true||区/县ID',

                'shop_type' => 'shop_type|int|true||店铺类型',

                'shop_address' => 'shop_address|string|true||详细地址（包含省、市、区）',

                'shop_state' => 'shop_state|int|false||店铺状态，0关闭，1开启，2审核中',

                'latitude' => 'latitude|float|false||纬度',

                'longitude' => 'longitude|float|false||经度',

                'shop_scope' => 'shop_scope|int|false||门店配送辐射范围（单位：米）',

                'pos_id' => 'pos_id|string|false||门店posid',
        
                'thumbnail' => 'thumbnail|string|false||门店缩略图',

            ),

            'queryList' => array(

                'shop_id' => 'shop_id|int|false||店铺索引id',

                'shop_name' => 'shop_name|string|false||店铺名称',

                'shop_company_name' => 'shop_company_name|string|false||店铺公司名称',

                'province_id' => 'province_id|int|false||店铺所在省份ID',

                'city_id' => 'city_id|int|false||店铺所在市ID',

                'district_id' => 'district_id|int|false||区/县ID',

                'shop_address' => 'shop_address|string|false||详细地区',

                'shop_zip' => 'shop_zip|string|false||邮政编码',

                'shop_state' => 'shop_state|int|false||店铺状态，0关闭，1开启，2审核中',

                'latitude' => 'latitude|float|false||纬度',

                'longitude' => 'longitude|float|false||经度',

                'shop_scope' => 'shop_scope|int|false||门店配送辐射范围（单位：米）',

                'fields' => 'fields|string|false|*|查询字段',

                'order' => 'order|string|false||排序',

                'page' => 'page|int|true|1|页码',

                'page_size' => 'page_size|int|true|20|每页数据条数'

            ),

            'queryCount' => array(

                'shop_id' => 'shop_id|int|false||店铺索引id',

                'shop_name' => 'shop_name|string|false||店铺名称',

                'shop_company_name' => 'shop_company_name|string|false||店铺公司名称',

                'province_id' => 'province_id|int|false||店铺所在省份ID',

                'city_id' => 'city_id|int|false||店铺所在市ID',

                'district_id' => 'district_id|int|false||区/县ID',

                'shop_address' => 'shop_address|string|false||详细地区',

                'shop_zip' => 'shop_zip|string|false||邮政编码',

                'shop_state' => 'shop_state|int|false||店铺状态，0关闭，1开启，2审核中',

                'latitude' => 'latitude|float|false||纬度',

                'longitude' => 'longitude|float|false||经度',

                'shop_scope' => 'shop_scope|int|false||门店配送辐射范围（单位：米）',

            ),

            'update' => array(

                'shop_id' => 'shop_id|int|true||店铺索引id',

                'shop_name' => 'shop_name|string|false||店铺名称',

                'shop_code' => 'shop_code|string|true||店铺编码',

                'shop_banner' => 'shop_banner|string|false||店铺主图',

                'shop_phone' => 'shop_phone|string|true||店铺电话',

                'shop_company_name' => 'shop_company_name|string|false||店铺公司名称',

                'province_id' => 'province_id|int|false||店铺所在省份ID',

                'city_id' => 'city_id|int|false||店铺所在市ID',

                'district_id' => 'district_id|int|false||区/县ID',

                'shop_address' => 'shop_address|string|false||详细地区',

                'shop_zip' => 'shop_zip|string|false||邮政编码',

                'shop_state' => 'shop_state|int|false||店铺状态，0关闭，1开启，2审核中',

                'pos_id' => 'pos_id|string|false||门店posid',

                'latitude' => 'latitude|float|false||纬度',

                'longitude' => 'longitude|float|false||经度',

                'shop_scope' => 'shop_scope|int|false||门店配送辐射范围（单位：米）',
        
                'thumbnail' => 'thumbnail|string|false||门店缩略图',

            ),

            'getDetail' => array(

                'shop_id' => 'shop_id|int|true||店铺索引id',

            ),

            'enable' => array(

                'shop_id' => 'shop_id|int|true||店铺索引id',

            ),

            'disable' => array(

                'shop_id' => 'shop_id|int|true||店铺索引id',

            ),

            'getNearbyShop' => array(

                'zipcode' => 'zipcode|string|false||地区编码',

                'latitude' => 'latitude|float|false||纬度，范围为-90~90，负数表示南纬',

                'longitude' => 'longitude|float|false||经度，范围为-180~180，负数表示西经',

                'address' => 'address|string|false||详细地址（latitude和longitude两个参数不传的时候address参数必传，精确省、市、区）',

            ),

        ));

    }

    /**
     * 修改门店（店铺）信息
     * @desc 修改门店（店铺）信息
     *
     * @return int ret 操作状态：200表示成功
     * @return array data 修改条数
     * @return string msg 错误提示
     */
    public function update() {

        $params = $this->retriveRuleParams('update');

        $regulation = array(

            'token' => 'required',

            'shop_id' => 'required',

        );

        \App\Verification($params, $regulation);

        return $this->dm->update($params);

    }

    /**
     * 门店（店铺）启用
     * @desc 门店（店铺）启用
     *
     * @return int ret 操作状态：200表示成功
     * @return array data 修改条数
     * @return string msg 错误提示
     */
    public function enable() {

        $conditions = $this->retriveRuleParams('enable');

        $regulation = array(

            'token' => 'required',

            'shop_id' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->enable($conditions);

    }

    /**
     * 门店（店铺）禁用
     * @desc 门店（店铺）禁用
     *
     * @return int ret 操作状态：200表示成功
     * @return array data 修改条数
     * @return string msg 错误提示
     */
    public function disable() {

        $conditions = $this->retriveRuleParams('disable');

        $regulation = array(

            'token' => 'required',
            
            'shop_id' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->disable($conditions);

    }

    /**
     * 获取门店总数接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return int data 总数
     * @return string msg 错误提示
     */
    public function queryCount() {

        $conditions = $this->retriveRuleParams('queryCount');

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->queryCount($conditions);

    }

    /**
     * 获取门店详情接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return int data.shop_id 表序号
     * @return string data.shop_name 店铺名称
     * @return int data.shop_type 店铺类型等级
     * @return int data.uid 会员id
     * @return int data.shop_group_id 店铺分类
     * @return string data.shop_company_name 店铺公司名称
     * @return int data.province_id 店铺所在省份ID
     * @return int data.city_id 店铺所在市ID
     * @return int data.district_id 区/县ID
     * @return string data.shop_address 详细地区
     * @return int data.shop_zip 邮政编码
     * @return int data.shop_state 店铺状态，0关闭，1开启，2审核中
     * @return string data.shop_close_info 店铺关闭原因
     * @return int data.shop_sort 店铺排序
     * @return string data.shop_create_time 店铺时间
     * @return string data.shop_end_time 店铺关闭时间
     * @return string data.shop_logo 店铺logo
     * @return string data.shop_banner 店铺横幅
     * @return string data.shop_avatar 店铺头像
     * @return string data.shop_keywords 店铺seo关键字
     * @return string data.shop_description 店铺seo描述
     * @return int data.shop_qq QQ
     * @return float data.latitude 纬度
     * @return float data.longitude 经度
     * @return int data.shop_scope 门店配送辐射范围（单位：米）
     * @return string msg 错误提示
     */
    public function getDetail() {

        $conditions = $this->retriveRuleParams('getDetail');

        $regulation = array(

            'token' => 'required',

            'shop_id' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->getDetail($conditions);

    }

    /**
     * 获取门店列表接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return int data.total 数据总条数
     * @return int data.page 当前页码
     * @return array data.list[] 门店（店铺）队列
     * @return int data.list[].shop_id 表序号
     * @return string data.list[].shop_name 店铺名称
     * @return int data.list[].shop_type 店铺类型等级
     * @return int data.list[].uid 会员id
     * @return int data.list[].shop_group_id 店铺分类
     * @return string data.list[].shop_company_name 店铺公司名称
     * @return int data.list[].province_id 店铺所在省份ID
     * @return int data.list[].city_id 店铺所在市ID
     * @return int data.list[].district_id 区/县ID
     * @return string data.list[].shop_address 详细地区
     * @return int data.list[].shop_zip 邮政编码
     * @return int data.list[].shop_state 店铺状态，0关闭，1开启，2审核中
     * @return string data.list[].shop_close_info 店铺关闭原因
     * @return int data.list[].shop_sort 店铺排序
     * @return string data.list[].shop_create_time 店铺时间
     * @return string data.list[].shop_end_time 店铺关闭时间
     * @return string data.list[].shop_logo 店铺logo
     * @return string data.list[].shop_banner 店铺横幅
     * @return string data.list[].shop_avatar 店铺头像
     * @return string data.list[].shop_keywords 店铺seo关键字
     * @return string data.list[].shop_description 店铺seo描述
     * @return int data.list[].shop_qq QQ
     * @return float data.list[].latitude 纬度
     * @return float data.list[].longitude 经度
     * @return int data.list[].shop_scope 门店配送辐射范围（单位：米）
     * @return string msg 错误提示
     */
    public function queryList() {

        $conditions = $this->retriveRuleParams('queryList');

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->queryList($conditions);

    }

    /**
     * 添加门店接口服务
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return int data 
     * @return string msg 错误提示
     */
    public function add() {

        $params = $this->retriveRuleParams('add');

        $regulation = array(

            'token' => 'required',

            'province_id' => 'required',

            'city_id' => 'required',

            'district_id' => 'required',

            'shop_address' => 'required',

            'shop_scope' => 'required',

        );

        \App\Verification($params, $regulation);

        return $this->dm->add($params);

    }

}
