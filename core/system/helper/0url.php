<?php
function getUrl($index){
    if(isset($_GET['url'])){
        $_url = explode('/', $_GET['url']);
        if (isset($_url[$index])){
            return $_url[$index];
        }
        return false;
    }
    return false;
}

function view($path){
    return view . '/' . $path . '.php';
}

function controller($path){
    return controller . '/' . $path . '.php';
}

if(!getUrl('0')){
    require controller('index');
} else {
    if (!is_file(controller(getUrl(0)))){
        require controller('404');
    } else {
        require controller(getUrl(0));
    }
}
function siteUrl($path){
    global $_CONFIG;
    return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/' . $_CONFIG['urlPrefix'] . '/'. $path;
}