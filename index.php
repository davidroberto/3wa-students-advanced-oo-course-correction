<?php

declare(strict_types=1);
error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once('./Model/Article.php');
require_once('./Model/EntityManager.php');

// instanciation d'une classe Article
$article = new Article();
// appel de setters pour définir la valeur des propriétés title, content et createdAt
$article->setTitle("PHP avancé");
$article->setContent("Découvrez le PHP avancé avec 3wa");

$entityManager = new EntityManager();
$entityManager->persistArticle($article);
