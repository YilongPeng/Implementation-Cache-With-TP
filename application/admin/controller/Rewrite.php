<?php
namespace app\admin\controller;


use app\model\Biz\BannerBiz;
use app\model\Biz\RewriteBiz;
use think\Controller;

class Rewrite extends Controller
{
    public function Banner2Json() 
    {
    	//To generate json format
    	$BannerModel = new BannerBiz();
    	$json = $BannerModel->GetBannerJson();

    	//To write file
    	$RewriteModel = new RewriteBiz();
    	$result = $RewriteModel->Write($json);
    	if($result ){
    		echo 'SUCCESS';
    	} else {
    		echo 'FAIL';
    	}
    }
}