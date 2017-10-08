<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP basic</title>
  </head>
  <body>
    <?php
      $target = mktime(0, 0, 0, 9, 30, 2018);
      $today = time();
      $difference = ($target-$today);
      $days = (int)($difference/86400);
      print "Our event will occur in $days days";
    ?>
  </body>
</html>
