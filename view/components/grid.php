<?php
require_once 'card.php';

function generateGrid($listProdutos)
{
  $grid = "";
  foreach ($listProdutos as $indice => $Produtos) {
    if ($indice % 4 == 0) {
      $grid = $grid . "<div class='row'>\n";
    }
    $grid = $grid . "<div class='col-lg-3 col-md-4 col-sm-6'>\n";
    $grid = $grid . createCard($Produtos);
    $grid = $grid . "</div>\n";
    if ($indice % 4 == 3) {
      $grid = $grid . "</div>\n";
    }
  }
  if (sizeof($listProdutos) % 4 == 0) {
    $grid = $grid . "</div>\n";
  }
  return $grid;
}

?>
