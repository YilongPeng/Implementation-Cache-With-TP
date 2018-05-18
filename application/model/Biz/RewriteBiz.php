<?php
namespace app\model\Biz;

use app\model\Dao\Banner;

class RewriteBiz
{

	public function Write($json)
	{
		return file_put_contents(SITE_PATH.'json/Banner.json', $json);		
	}
}