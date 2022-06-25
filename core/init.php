<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/system/config.php';
$requiredFiles = array_merge(glob('core/system/class/*.php'), glob('core/system/helper/*.php'));
foreach ($requiredFiles as $key => $value){
    require $value;
}
global $_CONFIG;
// Connect Database
$db = new Db($_CONFIG['db']['dir'], $_CONFIG['db']['config']);

