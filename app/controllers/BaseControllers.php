<?php

namespace controllers;

class BaseControllers
{
    protected $twig;

    /**
     * 构造函数 初始化视图
     */
    public function __construct()
    {
        $loader = new \Twig\Loader\FilesystemLoader(FILEDIR . "/app/views");
        $this->twig = new \Twig\Environment($loader, [
            // 'cache' => '/path/to/compilation_cache',
        ]);
    }

    /**
     * 视图渲染
     *
     * @param [type] $view  渲染的视图
     * @param array $data   传递的数据
     * @return void
     */
    public function display($view, $data = [])
    {
        echo $this->twig->render($view, $data);
    }
}
