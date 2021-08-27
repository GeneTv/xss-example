<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Übersicht</title>
    <style>
      .card {
        box-shadow: 0 3px 10px rgb(0 0 0 / 0.2);
        border-radius: 4px;
        padding: 15px;
        margin-bottom: 15px;
      }
      .card__name {
        font-weight: 700;
        margin: 5px 0;
      }
      .card__content {
        color: #373737;
      }
    </style>
  </head>
  <body>
    <h1>User Feedback</h1>

    <?php

    include 'mysql.db.php';

    $result = mysqli_query($conn, 'SELECT * FROM feedback');
    $data = mysqli_fetch_array($result, MYSQLI_ASSOC);

    // For debugging
    /*$data = array(
      array('firstname' => 'Test', 'email' => 'test@gmail.com', 'content' => 'kek'),
      array('firstname' => 'Test2', 'email' => 'test2@gmail.com', 'content' => 'XSS: <script>alert("You got XSSed");</script>')
    );*/

    foreach ($data as $key => $entry): ?>
    <div class="card">
      <p class="card__name"><?php echo $entry['firstname'].' ('.$entry['email'].')'; ?></p>
      <p class="card__content"><?php echo $entry['content']; ?></p>
    </div>

    <?php endforeach; ?>

  </body>
</html>