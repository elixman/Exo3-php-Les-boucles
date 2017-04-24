<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exo3-php-Les-boucles</title>
</head>
<body>

  <p>##Exercice 1</p>
  <p>
    <?php
      $loop = 0;
        while ($loop <= 10)
        {
          echo $loop;
          $loop++;
        }
    ?>
  </p>

  <p>##Exercice 2</p>
  <p>
    <?php
      $var1 = 0;
      $var2 = 55;
        while ($var1 < 20)
        {
          echo $var1 * $var2;
          $var1++;
        }
    ?>
  </p>

  <p>##Exercice 3</p>
  <p>
    <?php
      $var1 = 100;
      $var2 = 45;
        while ($var1 >= 10)
        {
          echo $var1 * $var2;
          $var1--;
        }
    ?>
  </p>

  <p>##Exercice 4</p>
  <p>
    <?php
      $var1 = 1;
        while ($var1 <= 10)
        {
          echo $var1;
          $var1+= 0.5;
        }
    ?>
  </p>

  <p>##Exercice 5</p>
  <p>
    <?php
      $loop = 1;
        while ($loop <= 15)
        {
          echo $loop++;
        }
          echo "We're almost there.";
    ?>
  </p>

  <p>##Exercice 6</p>
  <p>
    <?php
      $loop = 20;
        while ($loop >= 0)
        {
          echo $loop--;
        }
          echo "Almost good.";
    ?>
  </p>

  <p>##Exercice 7</p>
  <p>
    <?php
      $loop = 1;
        while ($loop <= 100)
        {
          echo $loop+=15;
        }
          echo "We're on the right track.";
    ?>
  </p>

  <p>##Exercice 8</p>
  <p>
    <?php
      $loop = 200;
        while ($loop >= 0)
        {
          echo $loop-=12;
        }
          echo "Done!";
    ?>
  </p>

</body> 
</html>
