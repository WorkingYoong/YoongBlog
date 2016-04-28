<?php
  $conn = mysqli_connect("localhost","root","asdf16");
  mysqli_select_db($conn,"YoongBlog");
  $result = mysqli_query($conn,"SELECT * FROM topic");
   ?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="http://localhost/YoongBlog/css/style.css">
</head>
<body id="target">
    <header>
    <img src="https://s3-ap-northeast-1.amazonaws.com/opentutorialsfile/course/94.png" alt="생활코딩">
        <h1><a href="http://localhost/YoongBlog/index.php">Yoong Blog</a></h1>
  </header>
    <nav>
        <ol>
    <?php
    while ($row = mysqli_fetch_assoc($result)){
      echo '<li><a href="http://localhost/YoongBlog/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
    }
    ?>
        </ ol>
    </nav>
  <div id="control">
    <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
    <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
    <a href="http://localhost/YoongBlog/write.php">쓰기</a>
  </div>
  <article>
    <form class="" action="process.php" method="post">
      <p>
        제목 : <input type="text" name="title" value="">
      </p>
      <p>
        작성자 : <input type="text" name="author" value="">
      </p>
      <p>
        본문 : <textarea name="description"></textarea>
      </p>
      <input type="submit" name="name" >

    </form>
  </article>
</body>
</html>
