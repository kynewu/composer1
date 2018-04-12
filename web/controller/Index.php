<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/4/12
 * Time: 13:38
 */
namespace web\controller;

use core\View;

class Index{

    protected $view;

    public function __construct(){
        $this->view = new View();
    }
    public function index(){
        $this->view->assign('version', '版本：1.0.0');
        return $this->view->show('index');

    }
}