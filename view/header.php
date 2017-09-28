<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>COGIP</title>
    <link rel="stylesheet" href="<?php echo STYLE;?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo STYLE;?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo STYLE;?>main.css">

  </head>
  <body>
    <header class="col-md-10 col-md-offset-2" id="page-header">
      <div class="left-header">
        <?php
          echo  '<h1>'.ucfirst($this->currentPage()).'</h1>';
        ?>
      </div>
      <div class="right-header">
        <form class="form-inline" action="#" method="post">
          <input type="text" class ="header-search form-control" name="" value="" placeholder="Recherche">
          <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" name="button">
            Créer,j,
            <span class="fa fa-chevron-down <?php echo $this->chevdisplay()?>" aria-hidden="true"></span>
            <ul class="dropdown-menu">
              <li>page 1</li>
              <li>page 2</li>
            </ul>
          </button>
        </form>
      </div>
    </header>
