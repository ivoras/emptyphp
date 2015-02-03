<?php
require_once('smarty/Smarty.class.php');

$sm = new Smarty();
$sm->setCompileDir('/tmp');

$sm->display('index.tpl');

