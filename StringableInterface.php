<?php

  function sayHello(Stringable $stringable): void
  {
    echo "Hello {$stringable->__toString()}" . PHP_EOL;
  }
