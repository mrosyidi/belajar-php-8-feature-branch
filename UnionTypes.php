<?php

  class Example
  {
    public string|int|bool|array $data;
  }

  $example = new Example();
  $example->data = "Eko";
  $example->data = 1;
  $example->data = true;
  $example->data = ["Eko"];

  function sampleFunction(string|array $data): void
  {
    if(is_array($data))
    {
      echo "Array" . PHP_EOL;
    }else if(is_string($data))
    {
      echo "String" . PHP_EOL;
    }
  }

  sampleFunction("Eko");
  sampleFunction([]);
