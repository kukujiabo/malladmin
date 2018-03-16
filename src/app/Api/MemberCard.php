<?php
namespace App\Api;

use PhalApi\Api;
use App\Domain\MemberCardDm;

/**
 * 会员卡接口
 *
 * @author: xiaoqiang <2938922@qq.com> 2017-12-09
 *
 */

class MemberCard extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            '*' => array(
                'token'  => array('name' => 'token', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '管理员令牌'),
            ),

            'add' => array(
				'card_name' => array('name' => 'card_name','type' => 'string' , 'require' => true, 'default' => '','desc' => '卡片名称'),
				'card_code' => array('name' => 'card_code', 'type' => 'string' , 'require' => false, 'default' => '','desc' =>'卡片编码'),
				'card_seq' => array('name' => 'card_seq' , 'type' => 'string' , 'require' => false , 'default' =>'' , 'desc' => '卡片识别码'),
				'img_url' => array('name' => 'img_url' , 'type' => 'string', 'require' => true , 'default' => '' ,'desc' => '卡片地址'),
				'card_type' => array('name' => 'card_type' ,'type' => 'int' , 'require' => false , 'default' => '' , 'desc' => '卡片类型,1,通用卡,2,指定卡片'),
            ),
            'GetCount' => array(
            	'id' => array('name'=> 'id','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片id'),
            	'card_name' => array('name'=> 'card_name','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片名称'),
            	'card_code' => array('name'=> 'card_code','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片编码'),
            	'card_seq' => array('name'=> 'card_seq','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片识别码'),
            	'img_url' => array('name'=> 'img_url','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片地址'),
            	'card_type' => array('name'=> 'card_type','type' => 'int' ,'require'=>false, 'default' => '' , 'desc' => '卡片类型'),

            ),
			'GetDetail' => array(
            	'id' => array('name'=> 'id','type' => 'string' ,'require'=>true, 'default' => '' , 'desc' => '卡片id'),
            	'card_name' => array('name'=> 'card_name','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片名称'),
            	'card_code' => array('name'=> 'card_code','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片编码'),
            	'card_seq' => array('name'=> 'card_seq','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片识别码'),
            	'img_url' => array('name'=> 'img_url','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片地址'),
            	'card_type' => array('name'=> 'card_type','type' => 'int' ,'require'=>false, 'default' => '' , 'desc' => '卡片类型'),

            ),

			'GetList' => array(
            	'id' => array('name'=> 'id','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片id'),
            	'card_name' => array('name'=> 'card_name','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片名称'),
            	'card_code' => array('name'=> 'card_code','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片编码'),
            	'card_seq' => array('name'=> 'card_seq','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片识别码'),
            	'img_url' => array('name'=> 'img_url','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片地址'),
            	'card_type' => array('name'=> 'card_type','type' => 'int' ,'require'=>false, 'default' => '' , 'desc' => '卡片类型'),

            ),

			'Update' => array(
            	'id' => array('name'=> 'id','type' => 'string' ,'require'=>true, 'default' => '' , 'desc' => '卡片id'),
            	'card_name' => array('name'=> 'card_name','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片名称'),
            	'card_code' => array('name'=> 'card_code','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片编码'),
            	'card_seq' => array('name'=> 'card_seq','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片识别码'),
            	'img_url' => array('name'=> 'img_url','type' => 'string' ,'require'=>false, 'default' => '' , 'desc' => '卡片地址'),
            	'card_type' => array('name'=> 'card_type','type' => 'int' ,'require'=>false, 'default' => '' , 'desc' => '卡片类型'),

            ),

        )
    	);

    }

	/**
     * 新增会员卡
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
	public function add(){
		$params = $this->retriveRuleParams('add');
		return $this->dm->add($params);

	}


	/**
     * 获取会员卡总数
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
	public function GetCount(){
		$params = $this->retriveRuleParams('GetCount');
		return $this->dm->GetCount($params);

	}

	/**
     * 获取会员卡详情
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
	public function GetDetail(){
		$params = $this->retriveRuleParams('GetDetail');
		return $this->dm->GetDetail($params);

	}

	/**
     * 获取会员卡列表
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
	public function GetList(){
		$params = $this->retriveRuleParams('GetList');
		return $this->dm->GetList($params);

	}

	/**
     * 修改会员卡信息
     * @desc 
     * @return int ret 操作状态：200表示成功
     * @return array data token
     * @return string msg 错误提示
     */
	public function Update(){
		$params = $this->retriveRuleParams('Update');
		return $this->dm->Update($params);

	}

}
