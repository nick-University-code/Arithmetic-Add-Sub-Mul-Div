<html>
    <head>
        <title>結果</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
          <div  style="background-color:#8DAA9D;color:white;height:400px; padding:50px;">  
              <h1 align="center"><font face="Microsoft JhengHei" color="#4A4E69" size="6" >
<?php
    $one=$_POST['one'];
    $two=$_POST['two'];
    $ans1=$one+$two;
    $ans2=$one-$two;
    $ans3=$one*$two;
    $ans4=$one/$two;
    echo "$one + $two = $ans1";
    echo '<br><br>';
    echo "$one - $two = $ans2";
    echo '<br><br>';
    echo "$one * $two = $ans3";
    echo '<br><br>';
    echo "$one / $two = $ans4";
    echo '<br><br>';  
     echo '<a href="index.html">回首頁</a>  <br><br>';
     ?>   
                  </h1>
              <h2 align="center">
                <img src=https://upload.cc/i1/2020/03/11/dq0TlC.gif height="100" width="50">
               </h2>
              </div>
   </body>
</html>