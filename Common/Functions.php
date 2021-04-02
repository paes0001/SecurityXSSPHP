<?php

$dbConnection = parse_ini_file("../Config/db_connection.ini");
//var_dump($dbConnection['dsn']);
$pdo = new PDO($dbConnection['dsn'], $dbConnection['user'], $dbConnection['passwordsql']);

function getAllComments()
{
  global $pdo;
  $sqlQuery = "SELECT * FROM comments";

  $sql = $pdo->prepare($sqlQuery);
  $sql->execute();
  $comments = $sql->fetchAll();

  return $comments;
}

function saveComment($name, $comment)
{
  global $pdo;
  $sqlQuery = 'INSERT INTO comments (name, comment) VALUES (?, ?) ';

  $sql = $pdo->prepare($sqlQuery);
  $sql->execute(array($name, $comment));
}
