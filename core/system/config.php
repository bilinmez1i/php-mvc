<?php

use SleekDB\Query;
define('dir', realpath('.') . '/');
define('controller', dir . 'core/work/controller');
define('view', dir . 'core/work/view');

$_CONFIG = [];
$_CONFIG['db'] = [
    'dir' => 'core/system/database',
    'config' => [
        "auto_cache" => true,
        "cache_lifetime" => null,
        "timeout" => 120,
        "primary_key" => "_id",
        "search" => [
            "min_length" => 2,
            "mode" => "or",
            "score_key" => "scoreKey",
            "algorithm" => Query::SEARCH_ALGORITHM["hits"]
        ]
    ]
];

$_CONFIG['urlPrefix'] = 'php-mvc';