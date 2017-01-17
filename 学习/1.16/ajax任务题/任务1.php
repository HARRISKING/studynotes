  <?php
    var $username = $_GET['value'];
    if($username == 'har'){
      $return = array('sex'=>'男','age'=>'23')
    }else if($username == 'dada'){
      $return = array('sex'=>'女','age'=>'22')
    }else{
      $return = array{'sex'=>'人妖','age'=>'1'}
    }
    echo json_encode($return);
  ?>
