<?php


define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__).DS);
define("APP",ROOT."app".DS);
define("CONTROLLER",APP."controllers".DS);
define("CORE",APP."core".DS);
define("MODEL",APP."models".DS);
define("VIEW",APP."views".DS);
define("CONFIG",APP."config".DS);

require_once ("../vendor/autoload.php");


$app = new MVC\core\app();