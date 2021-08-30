<?php
  session_start();

  $admin = isset($_GET['admin']) ? $_GET['admin'] : 'client';
  $mod = (isset($_GET['mod'])?$_GET['mod']:'home');
	$act = (isset($_GET['act'])?$_GET['act']:'index');

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