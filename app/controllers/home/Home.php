<?php

namespace home;

use controllers\BaseControllers;   //使用视图公共类

class Home extends BaseControllers
{
    public function test()
    {
        echo "我是home里面的test";
    }
}
