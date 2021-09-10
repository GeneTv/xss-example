<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Reviews</title>
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
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)):
    
      if($exampleIsSecure) {
        $firstname = htmlspecialchars($row['firstname'], ENT_QUOTES);
        $email = htmlspecialchars($row['email'], ENT_QUOTES);
        $content = htmlspecialchars($row['content'], ENT_QUOTES);
      }

    ?>
    <div class="card">
      <p class="card__name"><?php echo $firstname.' ('.$email.')'; ?></p>
      <p class="card__content"><?php echo $content; ?></p>
    </div>
    <?php endwhile; ?>

  </body>
</html>