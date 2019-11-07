#!/usr/bin/env php
<?php

// +----------------------------------------------------------------------
// | ThinkAdmin
// +----------------------------------------------------------------------
// | 版权所有 2014~2019 广州楚才信息科技有限公司 [ http://www.cuci.cc ]
// +----------------------------------------------------------------------
// | 官方网站: http://demo.thinkadmin.top
// +----------------------------------------------------------------------
// | 开源协议 ( https://mit-license.org )
// +----------------------------------------------------------------------
// | gitee 代码仓库：https://gitee.com/zoujingli/ThinkAdmin
// | github 代码仓库：https://github.com/zoujingli/ThinkAdmin
// +----------------------------------------------------------------------

namespace think;

define('APP_PATH', __DIR__ . '/application/');
define('BIND_MODULE', 'push/Worker');

require __DIR__ . '/thinkphp/base.php';

Container::get('app')->run()->send();
//Container::get('app')->path(__DIR__ . '/application/')->initialize();
//Console::init();

//namespace think;
//require __DIR__ . '/../thinkphp/base.php';
//Container::get('app')->run()->send();
