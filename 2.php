<!DOCTYPE html>
<html>

<body>

  <?php
  $matriks = array(
    array(1, 2, 3),
    array(1, 2, 3),
    array(1, 2, 3)
  );

  $new = $matriks;


  for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
      $temp = $new[$j][$i];

      echo $temp;

      $matriks[$i][$j] = $temp;
    }
    echo "<br>";
  }

  print_r($matriks);
  ?>

</body>

</html>