<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="robots" content="noindex">
<meta name="viewport" content="width=divice-width, initial-scale=1">
<link rel="stylesheet" href="teachers.css">
<link rel="icon" href="../picture/icon.png">
<title>なつみかん|講師用</title>
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
  <main>
    <h2>連絡</h2>
    <form method="post" action="post.php">
      <div class="keiji">
        <h3>記事投稿</h3>
        <div class="alart">
          <p class="alart-text">名前を書いて投稿してください。<br>誰が書いたのかわからなくなります。</p>
        </div>
        <p>題名</p>
        <p><input type="text" name="title" size="40" value="<?php echo $title ?>"></p>
        <p>本文</p>
        <p><textarea name="content" rows="8" cols="40"><?php echo $content ?></textarea></p>
        <p class="button"><input name="submit" type="submit" class="submit" value="投稿"></p>
        <p><?php echo $error ?></p>
      </div>
    </form>
  </main>
    <hr>
  <footer>
    <a href="teachers.php" class="top">To Teachers</a>
  </footer>
</body>
</html>