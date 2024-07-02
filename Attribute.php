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
