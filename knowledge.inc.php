<?php
echo "I\'ll be a professional". '<br>';
?>

<?php
$a = 'Мои знания на';
$b = 100;
$c = '%';
?>

<?php
  $price = 14;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php
$x = 6;
$y = &$x;
$y = 33;
echo $x.'<br>';
?>

<?php
echo $str = <<<EOD
Пример строки,
охватывающей несколько строк, 
с использованием heredok-синтаксиса
EOD . '<br>';
?>