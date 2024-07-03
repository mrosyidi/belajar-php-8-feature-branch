<?php

  function testMixed(mixed $param): mixed
  {
    if(is_array($param))
    {
      return [];
    }else if(is_string($param))
    {
      return "String";
    }else if(is_numeric($param))
    {
      return 1;
    }else
    {
      return null;
    }
  }

  var_dump(testMixed([]));
  var_dump(testMixed("Eko"));
  var_dump(testMixed(1));
  var_dump(testMixed(true));
  var_dump(testMixed(new stdClass()));
