<?php

if(!defined('BASE_URL'))
{
    define('BASE_URL','http://localhost/spiffy/');
}
if(!defined('ADMIN_URL'))
{
    define('ADMIN_URL',BASE_URL.'admin/');
}
if(!defined('IMGFOLDER'))
{
    define('IMGFOLDER',ADMIN_URL.'assets/images/');
}
if(!defined('ASSETS'))
{
    define('ASSETS',ADMIN_URL.'assets/');
}
if(!defined('CURRENT_PAGE'))
{
    define('CURRENT_PAGE',$currentPage = pathinfo(basename($_SERVER['PHP_SELF']), PATHINFO_FILENAME));
}
if(!defined('FILE_VERSION'))
{
    define('FILE_VERSION',rand(1,1000));
}
?>