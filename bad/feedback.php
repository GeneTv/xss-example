<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'mysql.db.php';

  if(false) { // true: secure ¦ false: insecure
    $firstname = htmlspecialchars($_POST['name'], ENT_QUOTES);
    $email = htmlspecialchars($_POST['email'], ENT_QUOTES);
    $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
  } else {
    $firstname = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
  }

  $res = mysqli_query($conn, 'INSERT INTO feedback (`firstname`, `email`,`content`) VALUES (\'' . $firstname .'\', \'' . $email . '\', \'' . $content . '\')');
  if($res !== false) {
    http_response_code(200);
    echo "Vielen Dank für Ihr Feedback!";
  }


} else {
  header('Location: /');
  exit();
}
?>

<a href="/reviews.php">Reviews ansehen</a>