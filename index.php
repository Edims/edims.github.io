<?php
/**
 *   index.php 主入口
 *
 * @copyright			(C) 2007-2020 大沭网
 * @license				http://www.shuyanghao.com/index.php?app=license
 * @lastmodify			2020-03-02
 */
define('SHUYANG_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
include SHUYANG_PATH.'/core/feitian.php';
shy_base::shuyang_app();
?>