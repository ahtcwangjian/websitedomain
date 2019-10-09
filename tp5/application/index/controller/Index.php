<?php

namespace app\index\controller;
use think\Controller;


class Index extends Controller
{
	/**
	 * 显示默认首页
	 * @Author   wangjian
	 * @DateTime 2019-10-09
	 * @return   [type]     [description]
	 */
    public function index()
    {
    	// 1.定义变量设置默认值
    	$price = 100000;//该域名出售的价格
    	$domain = "55g.com";//网站域名

    	if(!empty($_SERVER["HTTP_HOST"])){
    		$domain = $_SERVER["HTTP_HOST"];//获取当前域名
    	}

    	
    	
    	if($domain == "55g.com"){
    		$price = 150000;
    	}elseif ($domain == "zhaolan.com") {
    		$price = 20000;
    	}elseif ($domain == "piaoke.com") {
    		$price = 30000;
    	}elseif ($domain == "netbarsoft.com") {
    		$price = 40000;
    	}elseif ($domain == "yangpu.com") {
    		$price = 50000;
    	}

    	$this->assign("domain",$domain);
    	$this->assign("price",$price);
        return $this->fetch();
    }

    /**
     * 测试方法
     * @Author   wangjian
     * @DateTime 2019-10-09
     * @param    string     $name [description]
     * @return   [type]           [description]
     */
    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
