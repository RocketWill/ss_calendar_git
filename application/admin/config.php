<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    'view_replace_str' => [
      '__PUBLIC__' => SITE_URL.'/public/static',
    ],
    //數據狀態
    'STATUS' => array(array('status'=> '正常', 'value' => 0),array('status'=> '已刪除', 'value' => 1))
];
