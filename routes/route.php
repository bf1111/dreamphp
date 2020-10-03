<?php
//路由文件
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', "admin\Admin@demo");
Macaw::get('/hello', "home\Home@test");

Macaw::dispatch();
