<?php
/**
 *  cache_factory.class.php 缓存工厂类
 *
 * @copyright			(C) 2007-2020 大沭网
 * @license				http://www.shuyanghao.com/index.php?app=license
 * @lastmodify			2020-03-02
 */

final class cache_factory {
	/**
	 * 当前缓存工厂类静态实例
	 */
	private static $cache_factory;
	
	/**
	 * 缓存配置列表
	 */
	protected $cache_config = array();
	
	/**
	 * 缓存操作实例化列表
	 */
	protected $cache_list = array();
	
	/**
	 * 构造函数
	 */
	public function __construct() {
	}
	
	/**
	 * 返回当前终级类对象的实例
	 * @param $cache_config 缓存配置
	 * @return object
	 */
	public static function get_instance($cache_config = '') {
		if(cache_factory::$cache_factory == '' || $cache_config !='') {
			cache_factory::$cache_factory = new cache_factory();
			if(!empty($cache_config)) {
				cache_factory::$cache_factory->cache_config = $cache_config;
			}
		}
		return cache_factory::$cache_factory;
	}
	
	/**
	 * 获取缓存操作实例
	 * @param $cache_name 缓存配置名称
	 */
	public function get_cache($cache_name) {
		if(!isset($this->cache_list[$cache_name]) || !is_object($this->cache_list[$cache_name])) {
			$this->cache_list[$cache_name] = $this->load($cache_name);
		}
		return $this->cache_list[$cache_name];
	}
	
	/**
	 *  加载缓存驱动
	 * @param $cache_name 	缓存配置名称
	 * @return object
	 */
	public function load($cache_name) {
		$object = null;
		if(isset($this->cache_config[$cache_name]['type'])) {
			switch($this->cache_config[$cache_name]['type']) {
				case 'file' :
					$object = shy_base::load_sys_class('cache_file');
					break;
				default :
					$object = shy_base::load_sys_class('cache_file');
			}
		} else {
			$object = shy_base::load_sys_class('cache_file');
		}
		return $object;
	}

}
?>