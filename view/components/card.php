<?php
if (! defined('ROOT_PATH')) {
  define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ecomerce');
}

require_once ROOT_PATH . '/model/Produto.php';
require_once ROOT_PATH . '/model/db/ProdutoDAO.php';
require_once ROOT_PATH . '/model/Categoria.php';
require_once ROOT_PATH . '/model/db/CategoriaDAO.php';



function createCard($produto)
{
  $card = "<a href='/ecomerce?page=details&id={$produto->getId()}'>\n";
  $card = $card . "<div class='card'> \n";
  $card = $card . "<img src={$produto->getFotoPrincipal()} class='card-img-top' alt=>\n";
  $card = $card . "<div class='card-body'>\n";
  $card = $card . "<center><h5 class='card-title'>{$produto->getNomeProduto()}</h5></center>\n";
  $card = $card . "<center><p class='card-title'>{$produto->getDescricao()}</p></center>\n";
  // $card = $card . "<p class='card-text'>'{$produto->getIdCategoria()->getNomeCategoria()}'"."</p>\n";
  $card = $card . "<center><button type='button' class='btn btn-outline-primary'> R$ {$produto->getPreco()} </button></center>";
  $card = $card . "</div>\n";
  $card = $card . "</div>\n";
  $card = $card . "</a>\n";

  return $card;
}

 ?>
