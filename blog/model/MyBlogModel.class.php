<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-04-02 22:40:31
 */
require_once 'ModelBase.class.php';
require_once DIR ."/dao/DaoBlog.class.php";
require_once DIR . "/lib/Tools.class.php";
class MyBlogModel extends ModelBase {
    public $blog_type = array(
        1=>"历史迷雾",
        2=>'个人心路',
        3=>'技术控',
        4=>'学习心得'
    );
    //执行逻辑
    public  function preform(){
        $DaoBlog = new DaoBlog();
        $blog_list = $DaoBlog->getUserBlogListByUserId($this->user_info['user_id']);
        $blog_list = Tools::formartBlogList($blog_list);

        $pageInfo = Tools::_pageInfo($this->params['safe']['page'],count($blog_list),$limit=5);

        if(is_array($blog_list)){
            $blog_list = array_slice($blog_list, $pageInfo['start'],$pageInfo['limit']);
        }
        
        $this->result['pageInfo'] = $pageInfo;
        $this->result['data']['myblog_list'] = $blog_list;
    }

	//检测参数
    public function checkparams(){
        $this->params['safe']['page'] = empty($this->params['safe']['page']) ? 1 : $this->params['safe']['page'];
    }
}