<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>COGIP</title>
    <link rel="stylesheet" href="<?php echo STYLE;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo STYLE;?>main.css">
  </head>
  <body>
<header class="col-md-10 col-md-offset-2" id="page-header">
  <div class="row currentPage">
    <?php
    echo '<h1>'. ucfirst($this->currentPage()).'</h1>';
    ?>
  </div>
</header>
