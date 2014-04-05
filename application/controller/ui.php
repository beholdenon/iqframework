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
    $title = "Kitchen Sink";
    $desc = "This page includes every single Foundation element so that we can make sure things work together smoothly.";
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
    $title = "Visibility";
    $desc = "Visibility classes let you show or hide elements based on screen size or device orientation. You can use visibility classes to control which elements users see depending on their browsing environment.";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/visibility.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }  
  /**
  * PAGE: grid
  */
  public function grid() {
    $title = "Grid";
    $desc = "Create powerful multi-device layouts quickly and easily with the default 12-column, nest-able Foundation grid. If you're familiar with grid systems, you'll feel right at home. If not, you'll learn quickly.";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/grid.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
    /**
  * PAGE: gallery
  */
  public function gallery() {
    $title = "Gallery";
    $desc = "Create powerful multi-device layouts quickly and easily with the default 12-column, nest-able Foundation grid. If you're familiar with grid systems, you'll feel right at home. If not, you'll learn quickly.";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/gallery.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
      /**
  * PAGE: slideshow
  */
  public function slideshow() {
    $title = "Slideshow";
    $desc = "Integrate an easy, powerful, responsive image slider that allows users to swipe on touch-enabled devices.";
    require 'application/views/_templates/header.php';
    require 'application/views/_templates/feature-title.php';
    require 'application/views/ui/slideshow.php';
    require 'application/views/_templates/footer.php';
    require 'application/views/_templates/scripts.php';
    require 'application/views/_templates/bottom.php';
  }
}
