<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>BetBright Test</title>
  <meta name="description" content="DESCRIPTION">
  <link rel="stylesheet" href="main.css">
  <!--[if lt IE 9]>
     <script src = "http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
</head>

<body>
  <section>
    <header>
      <h1>BetBright - PHP Test</h1>
    </header>
    <div class="wrapper">
      <?php
      $now = strtotime("now");
      $nextTime='';
      $suppliedTime='';

      $thisWed = strtotime("Wednesday this week 8pm");
      $thisSat = strtotime("Saturday this week 8pm");
      $nextWed = strtotime("next Wednesday 8pm");
      $nextSat  = strtotime("next Saturday 8pm");
      //case 1 compare now to this Wednesday
      if($now<$thisWed){
        $nextTime = $thisWed;
        $suppliedTime = $thisSat;
      }
      elseif($now>$thisWed && $now<$thisSat){
        $nextTime = $thisSat;
        $suppliedTime = $nextWed;
      }
      elseif($now>$thisSat){
        $nextTime = $nextWed;
        $suppliedTime = $nextSat;
      }
      $moreInfo = "";
      $today = date("Y-m-d", $now);
      $nextTimeDay = date("Y-m-d", $nextTime);
      if($today==$nextTimeDay){
        $moreInfo = "Today at ";
      }
      echo "Now is: ".date("h:ia, l, Y-M-d", $now)."</br></br>";
      ?>
      <h4>Next Time: <?php echo $moreInfo.date( "ha, l, Y-M-d", $nextTime); ?></h4>
      <h4>Supplied Time: <?php echo date( "ha, l, Y-M-d", $suppliedTime); ?></h4>
      <?php



      ?>
    </div>
  </section>
</body>

</html>
