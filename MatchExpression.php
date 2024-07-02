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
