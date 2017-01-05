<?php
  var $username = $_GET['username'];

  if($username === ''){
    $ret = array('sex'=> '男','age'=>18);
  }
  echo json_encode($ret);
?>
