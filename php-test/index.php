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
      //get date and time of now
      $now = strtotime("now");
      //initiate 2 next times
      $nextTime='';
      $suppliedTime='';
      //2 possiblities are this week or next week
      $thisWed = strtotime("Wednesday this week 8pm");
      $thisSat = strtotime("Saturday this week 8pm");
      $nextWed = strtotime("next Wednesday 8pm");
      $nextSat  = strtotime("next Saturday 8pm");
      //case 1 compare now with this Wednesday
      if($now<$thisWed){
        $nextTime = $thisWed;
        $suppliedTime = $thisSat;
      }
      //case 2 between Wed & Sat
      elseif($now>$thisWed && $now<$thisSat){
        $nextTime = $thisSat;
        $suppliedTime = $nextWed;
      }
      //case 3 bigger than this Saturday => take next week value
      elseif($now>$thisSat){
        $nextTime = $nextWed;
        $suppliedTime = $nextSat;
      }
      //give more infor if we can bet today
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

    </div>
  </section>
</body>

</html>
