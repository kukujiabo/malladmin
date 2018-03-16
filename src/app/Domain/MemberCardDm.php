<?php

namespace App\Domain;

/**
 * 会员卡模块接口
 *
 * @author: xiaoqiang <jiangzhangchan@qq.com> 2017-10-31
 */
class MemberCardDm {

    /**
     * 获取会员列表
     */

    public function add($data){
    	$res = \App\Request('App.MemberCard.Add',$data);
        return $res;

    }

	public function GetCount($data){
    	$res = \App\Request('App.MemberCard.GetCount',$data);
        return $res;
    	
    }

	public function GetDetail($data){
    	 $res = \App\Request('App.MemberCard.GetDetail',$data);
    	return $res;
    }

	public function GetList($data){

    	 $res = \App\Request('App.MemberCard.GetList',$data);
    	return $res;
    }

	public function Update($data){
    	$res = \App\Request('App.MemberCard.Update',$data);
    	return $res;
        
    }


}
