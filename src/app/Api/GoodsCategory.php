<?php
namespace App\Api;

// use PhalApi\Api;
// use App\Domain\GoodsCategoryDm;

/**
 * 商品分类接口
 *
 * @author: jiangzhangchan <jiangzhangchan@qq.com> 2018-01-02
 *
 */

class GoodsCategory extends BaseApi {

    public function getRules() {

        return $this->rules(array(

            '*' => array(
                'token'  => array('name' => 'token', 'type' => 'string', 'require' => true, 'default' => '', 'desc' => '管理员令牌'),
            ),

            'add' => array(

                'category_name' => 'category_name|string|true||商品分类名称',

                'short_name' => 'short_name|string|false||商品分类简称',

                'pid' => 'pid|int|false|0|父级id',

                'level' => 'level|int|false|1|分类等级',

                'is_visible' => 'is_visible|int|false|1|是否显示  1 显示 0 不显示',

                'attr_id' => 'attr_id|int|false||关联商品类型ID',

                'attr_name' => 'attr_name|string|false||关联类型名称',

                'keywords' => 'keywords|string|false||关键词',

                'description' => 'description|string|false||描述',

                'sort' => 'sort|int|false||种类',

                'category_pic' => 'category_pic|string|false||商品分类图片',

                'index_show' => 'index_show|int|false||首页展示'

            ),

            'getDetail' => array(

                'category_id' => 'category_id|int|true||商品分类id',

            ),

            'queryList' => array(

                'category_id' => 'category_id|int|false||商品分类id',

                'category_name' => 'category_name|string|false||商品分类名称',

                'short_name' => 'short_name|string|false||商品分类简称',

                'pid' => 'pid|int|false||父级id',

                'level' => 'level|int|false||分类等级',

                'is_visible' => 'is_visible|int|false||是否显示  1 显示 0 不显示',

                'attr_id' => 'attr_id|int|false||关联商品类型ID',

                'attr_name' => 'attr_name|string|false||关联类型名称',

                'keywords' => 'keywords|string|false||关键词',

                'description' => 'description|string|false||描述',

                'sort' => 'sort|int|false||种类',

                'category_pic' => 'category_pic|string|false||商品分类图片',

                'fields' => 'fields|string|false|*|查询字段',

                'order' => 'order|string|false||排序',

                'index_show' => 'index_show|int|false||首页展示',

                'page' => 'page|int|true|1|页码',

                'page_size' => 'page_size|int|true|20|每页数据条数',

            ),

            'getAll' => array(

                'category_id' => 'category_id|int|false||商品分类id',

                'category_name' => 'category_name|string|false||商品分类名称',

                'short_name' => 'short_name|string|false||商品分类简称',

                'pid' => 'pid|int|false||父级id',

                'level' => 'level|int|false||分类等级',

                'is_visible' => 'is_visible|int|false||是否显示  1 显示 0 不显示',

                'attr_id' => 'attr_id|int|false||关联商品类型ID',

                'attr_name' => 'attr_name|string|false||关联类型名称',

                'keywords' => 'keywords|string|false||关键词',

                'description' => 'description|string|false||描述',

                'sort' => 'sort|int|false||种类',

                'category_pic' => 'category_pic|string|false||商品分类图片',

                'is_subclass' => 'is_subclass|int|false|2|是否显示子类别 1-是 2-否',

                'fields' => 'fields|string|false|*|查询字段',

                'order' => 'order|string|false||排序',

                'index_show' => 'index_show|int|false||首页展示'

            ),

            'update' => array(

                'category_id' => 'category_id|int|true||商品分类id',

                'category_name' => 'category_name|string|false||商品分类名称',

                'short_name' => 'short_name|string|false||商品分类简称',

                'pid' => 'pid|int|false||父级id',

                'level' => 'level|int|false||分类等级',

                'is_visible' => 'is_visible|int|false||是否显示  1 显示 0 不显示',

                'attr_id' => 'attr_id|int|false||关联商品类型ID',

                'attr_name' => 'attr_name|string|false||关联类型名称',

                'keywords' => 'keywords|string|false||关键词',

                'description' => 'description|string|false||描述',

                'sort' => 'sort|int|false||种类',

                'category_pic' => 'category_pic|string|false||商品分类图片',

                'fields' => 'fields|string|false|*|查询字段',

                'order' => 'order|string|false||排序',

                'index_show' => 'index_show|int|false||首页展示'

            ),

            'show' => array(
            
              'token' => 'token|string|true||用户令牌',

              'category_id' => 'category_id|int|true||分类id'
            
            ),

            'hide' => array(
            
              'token' => 'token|string|true||用户令牌',

              'category_id' => 'category_id|int|true||分类id',
            
            ),

            'remove' => array(
            
              'token' => 'token|string|true||用户令牌',

              'category_id' => 'category_id|int|true||分类id',
            
            )

        ));

    }

    /**
     * 编辑商品分类
     * @desc 编辑商品分类
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function update() {

        $regulation = array(

            'token' => 'required',

            'category_id' => 'required',

        );

        $params = $this->retriveRuleParams(__FUNCTION__);

        \App\Verification($params, $regulation);

        return $this->dm->update($params);

    }

    /**
     * 添加商品分类
     * @desc 添加商品分类
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function add() {

        $params = $this->retriveRuleParams(__FUNCTION__);

        return $this->dm->add($params);

    }

    /**
     * 查询商品分类详情
     * @desc 查询商品分类详情
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function getDetail() {

        $regulation = array(

            'token' => 'required',

            'category_id' => 'required',

        );

        $conditions = $this->retriveRuleParams(__FUNCTION__);

        \App\Verification($conditions, $regulation);

        return $this->dm->getDetail($conditions);

    }

    /**
     * 查询商品分类全部列表
     * @desc 查询商品分类全部列表
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function getAll() {

        $conditions = $this->retriveRuleParams(__FUNCTION__);

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->getAll($conditions);

    }

    /**
     * 查询商品分类列表
     * @desc 查询商品分类列表
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function queryList() {

        $conditions = $this->retriveRuleParams(__FUNCTION__);

        $regulation = array(

            'token' => 'required',

        );

        \App\Verification($conditions, $regulation);

        return $this->dm->queryList($conditions);

    }

    /**
     * 显示类型
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function show() {
    
      return $this->dm->show($this->retriveRuleParams(__FUNCTION__));
    
    }

    /**
     * 隐藏类型
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function hide() {
    
      return $this->dm->hide($this->retriveRuleParams(__FUNCTION__));
    
    }

    /**
     * 删除分类
     *
     * @return int ret 操作状态：200表示成功
     * @return array data[] 结果参数集
     * @return string msg 错误提示
     */
    public function remove() {
    
      return $this->dm->remove($this->retriveRuleParams(__FUNCTION__));
    
    }

}
