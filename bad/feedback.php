<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $conn = include 'mysql.db.php';


  $firstname = htmlspecialchars($POST['name'], ENT_QUOTES);
  $email = htmlspecialchars($POST['email'], ENT_QUOTES);
  $content = htmlspecialchars($POST['feedback'], ENT_QUOTES);

  $res = mysqli_query($conn, 'INSERT INTO feedback (`firstname`, `email`,`content`) VALUES (\'' . $firstname .'\', \'' . $email . '\', \'' . $content . '\')');
  if($res !== false) {
    http_response_code(200);
    echo "Vielen Dank für Ihr Feedback!";
  }


} else {
  header('Location: /');
  exit();
}