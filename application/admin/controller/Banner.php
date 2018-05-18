<?php
namespace app\admin\controller;


use app\model\Biz\BannerBiz;
use think\Controller;

class Banner extends Controller
{
    public function index()
    {
    	$model = new BannerBiz();
    	$model->getBanner();	
    }
}