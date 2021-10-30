<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=divice-width, initial-scale=1">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="icon" href="picture/icon.png">
  <title>なつみかん</title>
</head>

<body>
  <header>
    <h1 class="logo">
      <a href="index.php"><img src="夏みかん.bmp" alt="なつみかん"></a>
    </h1>
    <div class="drawer">
      <input type="checkbox" name="navToggle" id="navToggle" class="nav-toggle">
      <label for="navToggle" class="btn-burger">
        <span class="icon"></span>
      </label>

      <nav class="nav">
        <ul class="nav-list">
          <li class="item"><a href="index.php">ホーム</a></li>
          <li class="item"><a href="data/kaitou.html">解答</a></li>
          <li class="item"><a href="CT/word.html">単語CT</a></li>
          <li class="item"><a href="CT/grammer.html">文法CT</a></li>
          <li class="item"><a href="">ブログ</a></li>
          <li class="item"><a href="teachers/teachers.php">講師用</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="main">
    <p class="write">外部に掲載できるように、権利侵害しかねないものは消してあります。<br>自分のバイト先で使用しているサイトのため、制限が多いです。</p>
    <h1 class="heading">連絡事項</h1>
    <?php foreach ($posts as $post) { ?>
      <div class="post">
        <h2><?php echo $post['title'] ?></h2>
        <p><?php echo nl2br($post['content']) ?></p>
        <p>投稿日：<?php echo $post['time'] ?></p>
      </div>
    <?php } ?>
    <h1 class="heading">How to do</h1>
    <ul class="howto">
      <li>
        <article class="first-of-all"><a href="word/英語やってほしいこと(清書).pdf" target="_blank" rel="noopener noreferrer">
            <div class="first-img"><img src="picture/英語.jpg"></div>
            <div class="first-body">
              <p class="first-subject">英語</p>
              <h4>英語の学習法がここにある<br>まずは見ろ</h4>
            </div>
          </a></article>
      </li>
      <li>
        <article class="first-of-all"><a href="word/現代文の心得.pdf" target="_blank" rel="noopener noreferrer">
            <div class="first-img"><img src="picture/現文.jpg"></div>
            <div class="first-body">
              <p class="first-subject">現文</p>
              <h4>現代文の考え方とは<br>"カミクダキ"</h4>
            </div>
          </a></article>
      </li>
      <li>
        <article class="first-of-all"><a href="word/社会科目とは.pdf" target="_blank" rel="noopener noreferrer">
            <div class="first-img"><img src="picture/社会.jpg"></div>
            <div class="first-body">
              <p class="first-subject">社会</p>
              <h4>社会には法則がある<br>ただの暗記なんでつまらない</h4>
            </div>
          </a></article>
      </li>
    </ul>


    <section class="container">
      <h1 class="heading">contents</h1>
      <div class="next">
        <section>
          <div class="con">
            <a href="data/kaitou.html">
              <div class="pic"><img src="picture/akahon.jpg" alt="次へ"></div>
            </a>
            <div class="contnets">
              <div class="con_sub">
                <p class="con_sub_text">過去問の解答</p>
              </div>
              <p class="explain">なるべく分かり易い解説を心がけて作っています。新しいものができ次第アップします。より詳 しい解説が欲しい生徒は、校長へご連絡ください。<br>過去問は東進データベースから取ることを想定しています。<br><a href="data/kaitou.html" class="btn">解答</a></p>
            </div>
          </div>
        </section>
        <section>
          <div class="con">
            <a href="CT/word.html">
              <div class="pic"><img src="picture/単語.bmp" alt="次へ"></div>
            </a>
            <div class="contnets">
              <div class="con_sub">
                <p class="con_sub_text">単語チェックテスト</p>
              </div>
              <p class="explain">小テストで使われているサイトに飛びます。<br>現在は外部サイトに委託していますが、最終的には当サイト内で完結できるようにします。<br><a href="CT/word.html" class="btn">単語CT</a></p>
            </div>
            <div>
        </section>
        <section>
          <div class="con">
            <a href="CT/grammer.html">
              <div class="pic"><img src="picture/文法.jpg" alt="次へ"></div>
            </a>
            <div class="contnets">
              <div class="con_sub">
                <p class="con_sub_text">文法チェックテスト</p>
              </div>
              <p class="explain">準備中です。完成次第UPします。（準備中のまま終わるかも。。。）<br><a href="CT/grammer.html" class="btn">文法CT</a></p>
            </div>
          </div>
        </section>
      </div>

    </section>
    <footer>
      <h1 class="heading">teachers</h1>
      <div class="footer">
        <div class="myplof">
          <h2>Who is クリ</h2>
          <ul>
            <li>1999/05/12生</li>
            <li>石川県七尾市で生まれ、転勤を繰り返した末に千葉県に定住</li>
            <li>M田塾にて浪人を経験し、都内某H大学文系学部入学</li>
            <li>EN・ESならギリギリ理解できる</li>
            <li>カフェとの掛け持ちでバイトしてます。</li>
            <li>プログラミング勉強中</li>
          </ul>
        </div>
        <div class="mymate">
          <h2>優しい講師たち</h2>
          <img src="picture/amane.jpg" name="everyone">
        </div>
      </div>
    </footer>
    <hr>
    <p class="copyright">Copyright©natsumikan.cram</p>
  </div>
  <script src="main.js"></script>
</body>

</html>