<?php

if (!function_exists('router')) {

  function router()
  {
    return new Arch\Router\Manager();
  }
}