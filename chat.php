
<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Localo</title>
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="headpage">
      <img src="img/logo.png" alt="" style="height:100px;" title="LokalO">
    </div>
    <div class="container-page">
      <div class="c-contact">
        <?php include 'part/head-contact.php'; ?>
        <?php include 'part/contact-list.php'; ?>
      </div>
      <div class="c-chat">
        <?php include 'part/head-chat.php'; ?>
        <?php include 'part/chat-list.php'; ?>
        <?php include 'part/chat-input.php'; ?>
      </div>
      <div class="clear"></div>
    </div>
    <div class="logout">
      <a href="logout.php"><img src="img/logout.png" alt="" style="height:50px;" title="Log Out"></a>
    </div>
  </body>
</html>
