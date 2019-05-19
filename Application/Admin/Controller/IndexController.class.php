<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){
            //判断是否有更新
//            $now_version = C('now_version');
        //http://www.lcm.wang/
//            $getVersion = file_get_contents("http://jiww.top/index.php/Home/Index/getVersion/myversion/{$now_version}");
//            $version = json_decode($getVersion,true);
//            $version['now_version'] = $now_version;
//            $this->assign("version",$version);

    	$this->display();
    }







}
