<?php

/**
* Class UI
*
* Please note:
* Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
* This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
*
*/
class UI extends Controller {
  /**
  * PAGE: index
  */
  public function index() {
    $title = "IQ Framework - UI Documentation";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature.php';
    require 'application/views/ui/index.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
  
  /**
  * PAGE: kitchenSink
  */
  public function kitchenSink() {
    $title = "IQ Framework - UI Documentation - Kitchen Sink";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/kitchenSink.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
  
  /**
  * PAGE: visibility
  */
  public function visibility() {
    $title = "IQ Framework - UI Documentation - Visibility";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/visibility.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
}
