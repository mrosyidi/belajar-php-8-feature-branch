<?php

  #[Attribute(Attribute::TARGET_PROPERTY | Attribute::TARGET_PARAMETER)]
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

  function validateNotBlank(ReflectionProperty $property, object $object): void
  {
    $attributes = $property->getAttributes(NotBlank::class);
    if(count($attributes) > 0)
    {
      if(!$property->isInitialized($object))
      {
        throw new Exception("Property $property->name is null");
      }

      if($property->getValue($object) == null)
      {
        throw new Exception("Property $property->name is null");
      }
    }
  }

  $request = new LoginRequest();
  $request->username = "eko";
  $request->password = null;
  validate($request);
