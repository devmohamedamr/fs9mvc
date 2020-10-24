<?php

namespace MVC\core;


class controller{

    public function view($path,$parm){
        extract($parm);
        require_once(VIEW.$path.".php");
    }
}