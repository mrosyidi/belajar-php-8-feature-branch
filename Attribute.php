<?php

  #[Attribute]
  class NotBlank
  {

  }

  class LoginRequest
  {
    #[NotBlank]
    var ?string $username;

    #[NotBlank]
    var ?string $password;
  }

  function validate(object $object): void
  {
    $class = new ReflectionClass($object);
    $properties = $class->getProperties();
    
    foreach($properties as $property)
    {
      validateNotBlank($property, $object);
    }
  }
