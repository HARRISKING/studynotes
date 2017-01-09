  <?php
      $username = $_GET['username'];
      // $username = $_POST['username'];
      if($username === 'har'){
        $ret = array('sex'=>'男','age'=>'23');
      }else if($username === 'marry'){
        $ret = array('sex'=>'女','age'=>'22');
      }else{
        $ret = array('sex'=>'女','age'=>'27');
      }
      echo json_encode($ret);  //输出标准json格式
  ?>
