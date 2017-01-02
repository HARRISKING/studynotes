<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- <?php
      $x=5;
      $y=10;
      function myTest()
      {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
      }
      myTest();
      echo $y;  //5;
    ?> -->


      <!-- <?php
        function mytest()
        {
          static $x = 0;
          echo $x;
          $x++;
        }
        myTest();  //0;
        myTest();  //1;
        myTest();  //2;
       ?>




       <?php
        function()
        {
          echo $x;
        }

        myTest(5);
        ?> -->

    <?php
      echo "<h2>php is fun ! <h2>";
      echo "hello world! <br>";
      echo "I`m about to learn php!<br>";
      echo "This", "string", "was", "made", "with mutiple parameters.";
     ?>

    <?php
      $text1 = "learn PHP";
      $text2 = "w3school.cc";
      $cars = array("volvo","BMW","Toyata");

      echo $text1;
      echo "<br>";
      echo "study php at $text2";
      echo "my car is a {$cars[0]}";
    ?>
    <?php
      $text1 = "Hello world!";
      $text2 = "What a nice day!";
      echo $text1 .''.$text2;  //Hello world! What a nice day!
    ?>

    <?php
      echo strlen("hello world!");  //12;
    ?>


    <?php
      echo strpos("hello world","world");  //6;
    ?>

    <?php
      $cars = array("volvo","BMW","Toyota");
      $arrlength = count($cars);

      for($i=o; $i<$arrlength; $i++)
      {
        echo $car[$i];
        echo "<br>";
      }
    ?>


    方法一：
    <?php
      $age = array("peter"=>"35","ben"=>"37","har"=>"23");
        foreach($age as $x=>$x_value)
        {
          echo "key=" . $x .", value=" . $x_value;
          echo "<br>";
        }
    ?>
    方法二：
    <?php
      $age['peter'] = "35";
      $age['ben'] = "37";
      $age['har'] = "23";
    ?>

  </body>
</html>
