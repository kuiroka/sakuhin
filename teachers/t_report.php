<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=divice-width, initial-scale=1">
  <link rel="stylesheet" href="teachers.css">
  <link rel="icon" href="../picture/icon.png">
  <title>なつみかん</title>
</head>

<body>
  <header>
    <h1 class="logo">
      <a href="../index.php"><img src="../夏みかん.bmp" alt="なつみかん"></a>
    </h1>
    <div class="drawer">
      <input type="checkbox" name="navToggle" id="navToggle" class="nav-toggle">
      <label for="navToggle" class="btn-burger">
        <span class="icon"></span>
      </label>

      <nav class="nav">
        <ul class="nav-list">
          <li class="item"><a href="../index.php">ホーム</a></li>
          <li class="item"><a href="../data/kaitou.html">解答</a></li>
          <li class="item"><a href="../CT/word.html">単語CT</a></li>
          <li class="item"><a href="../CT/grammer.html">文法CT</a></li>
          <li class="item"><a href="">ブログ</a></li>
          <li class="item"><a href="t_post.php">掲示板</a></li>
          <li class="item"><a href="report.php">報告書</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <p>本来はここにカレンダーが表示される。権利の関係で掲載せず</p>
  <h1>報告書</h1>
  <form method="post" action="reg.php">
    <h3>投稿</h3>
    <div class="reg">
      <p>生徒名</p>
      <?php
      $new_mysqli = new mysqli('localhost:3308', 'root', '', 'report');
      $sql = "SELECT id,name,year FROM user ORDER BY year";
      if ($user_data = $new_mysqli->query($sql)) {
        echo  "<select type='text' name='user_id'>";
        while ($row = $user_data->fetch_assoc()) {
          echo '<option value="' . $row["id"] . '">' . $row["name"] . '</option>';
        }
        echo "</select>";
      }
      $user_data->close();
      ?>
      <p><input type="text" name="title" size="40" placeholder="タイトル"><?php echo $title ?></input></p>
      <p><textarea name="report" rows="10" cols="50" placeholder="内容"><?php echo $content ?></textarea></p>
      <p class="button"><input class="submit" name="submit" type="submit" value="投稿"></p>
      <p><?php echo $error ?></p>
    </div>
  </form>

  <h1>検索画面</h1>
  <form action="" method="post">
    <p>検索したい人の名前を選択してください</p>
    <!-- 名前 -->
    <?php
    $new_mysqli = new mysqli('localhost:3308', 'root', '', 'report');
    $sql = "SELECT id,name,year FROM user ORDER BY year";
    if ($user_data = $new_mysqli->query($sql)) {
      echo  "<form action='' method='post'><select type='search' name='search'>";
      while ($row = $user_data->fetch_assoc()) {
        echo '
    <option value="' . $row["id"] . '">' . $row["name"] . '</option>';
      }
      echo "</select>";
    }
    $user_data->close();

    ?>
    <input type="submit" name="submit" value="検索">
  </form>
  <?php

  require_once("reg_db.php");
  if (!empty($_POST['search'])) {
  ?>
    <?php
    $dbh = new PDO($db, $user, $password);
    $st = $dbh->prepare("SELECT * FROM user WHERE id LIKE :user_name");
    $st->bindValue(":user_name", ($_POST['search']));
    $st->execute();
    if ($st->rowCount()) {
    ?>
  <?php
      foreach ($st as $value) {
        echo  "<br>";
        echo  $value['name'];
        echo  "<br>";
        echo  $value['school'];
        echo  "<hr>";
      }
    }
  }
  ?>
  <?php
  require_once("reg_db.php");
  if (!empty($_POST['search'])) {
  ?>

    <?php
    $dbh = new PDO($db, $user, $password);
    $stm = $dbh->prepare("SELECT * FROM reports WHERE user_id LIKE :user_name ORDER BY time DESC");
    $stm->bindValue(":user_name", ($_POST['search']));
    $stm->execute();
    if ($stm->rowCount()) {
    ?>

  <?php
      foreach ($stm as $value) {
        echo "<form method='post' action='henko.php'>";
        echo "<details>";
        echo "<summary>";
        echo $value["title"];
        echo '<input class="id" name="id" value="' . $value["id"] . '">';
        echo "</summary>";
        echo "<br>";
        echo  "<textarea class='post' name='report' rows='10' cols='40'>";
        echo  $value['report'];
        echo  "</textarea>";

        echo "</p>";
        echo  "<p class='button'><input class='submit' name='repost'type='submit' value='修正'></p>";
        echo  "</form></div></div>";
        echo "</details>";
        echo  "<p>最終更新";
        echo  $value['time'];
        echo  "<hr>";
      }
    }
  }
  ?>



  <footer>
    <hr>
    <a href="teachers.php" class="top">To Teachers</a>
  </footer>
</body>

</html>