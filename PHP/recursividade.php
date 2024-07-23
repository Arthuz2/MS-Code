<?php

function fatorial(int $n): int
{
  $proxNum = $n - 1;
  if ($proxNum != 0) {
    $res = $n * fatorial($proxNum);
    return $res;
  } else {
    return 1;
  }
}

function fibonacci(int $n): int
{
  if ($n > 1) {
    return fibonacci($n - 1) + fibonacci($n - 2);
  } else {
    return $n;
  }
}

echo fatorial(5) . "<br>";
echo fibonacci(4) . "<br>";