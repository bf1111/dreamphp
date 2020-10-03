<?php

namespace admin;

use controllers\BaseControllers;

class Admin extends BaseControllers
{
    public function demo()
    {
        return $this->display('admin/index/index.html');
    }
}
