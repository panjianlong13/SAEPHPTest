<?php
/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-03-21 17:29:12
 */

error_reporting(E_ALL);

require_once 'ModelBase.class.php';
require_once DIR ."/dao/DaoBlog.class.php";
require_once DIR ."/dao/DaoUser.class.php";
require_once DIR ."/dao/DaoComment.class.php";
require_once DIR . "/lib/Tools.class.php";

class IndexModel extends ModelBase {
	public $blog_type = array(
        1=>"历史迷雾",
        2=>'个人心路',
        3=>'技术控',
        4=>'学习心得'
    );
    //执行逻辑
    public  function preform(){
    	$DaoBlog = new DaoBlog();
    	$list = $DaoBlog->getBlogList();
    	$pageInfo = Tools::_pageInfo($this->params['safe']['page'],count($list),$limit=5);
        //=============
        if(is_array($list)){
            $list = array_slice($list, $pageInfo['start'],$pageInfo['limit']);//10
        }

        $DaoUser = new DaoUser();
        $hot_user = $DaoUser->getUser();    	
        $this->result['hot_user'] = $hot_user;

        $list = Tools::formartBlogList($list);

    	$this->result['data']['list'] = $list;
    	$this->result['pageInfo'] = $pageInfo;
    }


	//检测参数
    public function checkparams(){
    	$this->params['safe']['page'] = empty($this->params['safe']['page']) ? 1 : $this->params['safe']['page'];
    }
}