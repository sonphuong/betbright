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
      echo "today is: ".$today =  date("l")."</br>";

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
      echo "Now is ".date("l Y-m-d h:i:s a", $now)."</br>";
      echo "Next Time: ".date( "l Y-m-d h a", $nextTime)."</br>";
      echo "</br>";
      echo "</br>";
      $ntdt=ceil(($nextTime-time())/60/60/24);
      echo "There are " . $ntdt ." days until next time."."</br>";
      echo "Supplied date: ".date( "l Y-m-d h a", $suppliedTime)."</br>";
      $stdt=ceil(($suppliedTime-time())/60/60/24);
      echo "There are " . $stdt ." days until suppliedTime."."</br>";
      ?>
    </div>
  </section>
</body>

</html>
