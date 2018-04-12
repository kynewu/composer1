<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/4/12
 * Time: 13:51
 */

namespace core;

class Bootstrap {


    public static function run(){
        if(isset($_GET['s'])){
            $route = $_GET['s'];
            $route_arr = explode('/', $route);

            $class = isset($route_arr[0]) ? ucfirst($route_arr[0]) : 'Index';
            $action = isset($route_arr[1]) ? $route_arr[1] : 'index';

            $class = "\web\controller\\".$class;
            $controller = new $class();
            echo $controller->$action();

        }else{
            die('hello composer');
        }
    }
}