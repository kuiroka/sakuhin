<?php
  $error = $content =$title= '';
  if (@$_POST['repost']) {
    $content = $_POST['report'];
    $id = $_POST['id'];
    if (!$content) $error = '本文がありません。<br>';
    if (!$error) {
      $pdo = new PDO("mysql:dbname=report", "root");
     $pdo->query("UPDATE reports SET report = '$content' WHERE id ='$id' ");
      header('Location: t_report.php');
      exit(); 
    }
  }
  require 't_report.php';
?>