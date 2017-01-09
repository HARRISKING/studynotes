<?php
    $username = $_GET['username'];
    // $username = $_POST['username'];

    if($username === 'har'){
      $returns = array('sex'=>'男','age'=>'23');
    }elseif($username === 'marry'){
      $returns = array('sex'=>'女','age'=>'22');
    }else{
      $returns = array('sex'=>'女','age'=>'33');
    }
    echo json_encode($returns);
?>
