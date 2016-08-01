<?php
namespace Api\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        /*$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');*/
        $personArr = array(
        	'name' => 'zhang',
        	'age'  => '18',
        	'job'  => 'php',
 
        	);
        dump($personArr);
        //把数组转化为一个json字符
        $personJson = json_encode($personArr);
        echo $personJson;
    }
    public function jsonObj(){
    	$personJson = '{"name":"zhang","age":"18","job":"php"}';
    	//把JSON字符串转化为一个对象
    	$personObj = json_decode($personJson);
    	dump($personObj);
    	//再把json对象转换为一个数组
    	$personArr = json_decode($personJson);
    	dump($personArr);
    }
}