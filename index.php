<?php

if(isset($_GET['view'])){
  if(file_exists('core/controllers/' . strtolower($_GET['view']) . '_controller.php')){
    include('core/controllers/' . strtolower($_GET['view']) . '_controller.php');
  }else {
    include('core/controllers/error_controller.php');
  }
}else {
  include('core/controllers/index_controller.php');
}

 ?>
