<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/4/12
 * Time: 14:25
 */

namespace core;

class View{

    protected $file;

    protected $vals = array();

    public function show($file){
        $this->file = "view/".$file.".html";
        return $this;
    }

    public function assign($name, $value){
        $this->vals[$name] = $value;
        return $this;
    }

    public function __toString(){
        extract($this->vals);
        include $this->file;
        return '';
    }
}