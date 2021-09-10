<?php
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  include 'mysql.db.php';

  $firstname = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $content = mysqli_real_escape_string($conn, $_POST['content']);


  if($exampleIsSecure) {

    /**
     * The secure example will escape all html special characters. This will
     * prevent (especially html tags) from being stored into the database, as html string.
     */
    $firstname = htmlspecialchars($firstname, ENT_QUOTES);
    $email = htmlspecialchars($email, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);

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