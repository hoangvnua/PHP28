<?php
  session_start();

  $admin = isset($_GET['admin']) ? $_GET['admin'] : 'admin';
  $mod = (isset($_GET['mod'])?$_GET['mod']:'admin');
	$act = (isset($_GET['act'])?$_GET['act']:'list');

  $controllerClassName = ucfirst($mod). 'Controller';
  $path = 'controllers/' . ucfirst($admin) .'/'. $controllerClassName .'.php';
  if(!file_exists($path)){
    echo "Url không tồn tại!";
    exit();
  }

  require_once $path;

  $controllerObj = new $controllerClassName();

  if(!method_exists($controllerObj,$act)){
    echo "Chức năng không tồn tại!";
    exit();
  }

  $controllerObj->$act();
?>