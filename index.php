<?php 
// +----------------------------------------------------------------------
// | Fanwe 方维o2o商业系统
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://www.fanwe.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: 云淡风轻(97139915@qq.com)
// +----------------------------------------------------------------------

define("FILE_PATH",""); //文件目录，空为根目录
require_once './system/system_init.php';

require_once APP_ROOT_PATH.'app/Lib/'.APP_TYPE.'/core/MainApp.class.php';
//实例化一个网站应用实例
$AppWeb = new MainApp();
?>