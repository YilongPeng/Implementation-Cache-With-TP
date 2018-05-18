<?php
namespace app\model\Biz;

use app\model\Dao\Banner;

class BannerBiz
{


	public function GetBannerJson($num = 5)
	{
		$list = Banner::where('status', 1)->order('order DESC')->limit($num)->select();
		return $list->toJson();	
	}
}