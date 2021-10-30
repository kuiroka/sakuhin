<?php
  $error = $name = $content = '';
  if (@$_POST['submit']) {
    $name = $_POST['user_id'];
    $content = $_POST['report'];
    if (!$name) $error = '名前がありません。<br>';
    if (mb_strlen($name) > 80) $error .= '名前が長すぎます。<br>';
    if (!$content) $error = '本文がありません。<br>';
    if (!$error) {
      require_once('rep_db.php');
      $pdo = new PDO($db, $user, $password);
      $st = $pdo->query("INSERT INTO reports(user_id,report) VALUES('$name','$content')");
      header('Location: t_report.php');
      exit();
    }
  }
  require 't_report.php';
?>