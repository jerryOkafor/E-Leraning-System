<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config.php';

$smarty = new Smarty();
$smarty->template_dir = "$path/temp/smarty/templates";
$smarty->compile_dir = "$path/temp/smarty/templates_c";
$smarty->cache_dir = "$path/temp/smarty/cache";
$smarty->config_dir = "$path/temp/smarty/configs";
