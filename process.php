<?php
  $conn = mysqli_connect("localhost","root","asdf16");
  mysqli_select_db($conn,"YoongBlog");

  $sql = "SELECT id FROM user where name = '".$_POST['author']."'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows == 0) {
    $sql = "INSERT INTO user (name,password) VALUES ('".$_POST['author']."','1111')";
    mysqli_query($conn, $sql);
    $user_id = mysqli_insert_id($conn);
  }
  else {
    $row = mysqli_fetch_assoc($result);

    $user_id = $row['id'];
  }

  $sql = "INSERT INTO topic (title,description,author,created) VALUES('".$_POST['title']."', '".$_POST['description']."', '".$user_id."', now())";
  mysqli_query($conn, $sql);

  header('Location: http://localhost/YoongBlog/index.php');
 ?>
