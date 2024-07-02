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

  function sampleFunction(string|array $data): string|array
  {
    if(is_array($data))
    {
      return "Array" . PHP_EOL;
    }else if(is_string($data))
    {
      return "String" . PHP_EOL;
    }
  }

  var_dump(sampleFunction("Eko"));
  var_dump(sampleFunction([]));
