<?php
for ($a = 1; $a <= 10; $a++) { // perulangan 1 sampai 10
  $j = 0;
  for ($i = 1; $i <= $a; $i++) {
    if ($a % $i == 0) {
      $j++;
    }
  }
  if ($j == 2) {
    echo $a . '';
  }
}
