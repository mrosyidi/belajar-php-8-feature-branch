<?php

  $value = "A";
  $result = "";

  switch($value)
  {
    case "A":
    case "B":
    case "C":
      $result = "Anda lulus";
      break;
    case "D":
      $result = "Anda tidak lulus";
      break;
    case "E":
      $result = "Mungkin Anda salah jurusan";
      break;
    default:
      $result = "Nilai apa itu?";
  }

  echo $result . PHP_EOL;

  $value = "A";
  $result = match($value)
  {
    "A", "B", "C" => "Anda lulus",
    "D" => "Anda tidak lulus",
    "E" => "Sepertinya Anda salah jurusan",
    default => "Nilai apa itu?"
  };

  echo $result . PHP_EOL;

  $value = 80;
  $result = match(true)
  {
    $value >= 80 => "A",
    $value >= 70 => "B",
    $value >= 60 => "C",
    $value >= 50 => "D",
    default => "E"
  };

  echo $result . PHP_EOL;

  $name = "Mr.Eko";
  $result = match(true)
  {
    str_contains($name, "Mr.") => "Hello Sir",
    str_contains($name, "Mrs.") => "Hello Mam",
    default => "Hello"
  };

  echo $result . PHP_EOL;
