<?php
defined('IN_SHUYANG') or exit('No permission resources.');
//模型缓存路径
define('CACHE_MODEL_PATH',CACHE_PATH.'caches_model'.DIRECTORY_SEPARATOR.'caches_data'.DIRECTORY_SEPARATOR);
class index {
	function __construct() {
	}
	//首页
	public function init() {
		include template('content','index');
	}
	//列表页
	public function lists() {
		$catid = $_GET['catid'];
		echo "您现在访问的是".$catid."栏目";
	}
	//内容页
	public function show() {
		$catid = $_GET['catid'];
		$id = $_GET['id'];
		echo "您现在访问的是".$catid."栏目里的".$id."内容";
	}
}
?>