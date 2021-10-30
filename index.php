<?php
require_once('db.php');
$pdo = new PDO($dsn, $user, $password);
$st = $pdo->query("SELECT * FROM post ORDER BY no DESC");
$posts = $st->fetchAll();
for ($i = 0; $i < count($posts); $i++) {
  $st = $pdo->query("SELECT * FROM letter WHERE post_no={$posts[$i]['no']} ORDER BY no DESC");
  $posts[$i]['letters'] = $st->fetchAll();
}
require 't_index.php';