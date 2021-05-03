<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- MY CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- VueJs -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- VueAXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- MY JS -->
    <script src="script.js"></script>
  </head>
  <body>
    <h1>PHP</h1>
    <h1>
      <?php
      $badword = $_GET["badword"];
      $sentence = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
      $goodSentence = str_replace($badword, '***', $sentence);
      $sentenceleng = strlen($sentence);
      $goodSentenceleng = strlen($goodSentence);
      // var_dump($goodSentence); die();
      ?>
    </h1>

    <h1><?php echo $sentence; ?></h1>
    <h1><?php echo "Lungezza del stringa = "; echo $sentenceleng;?></h1>
    <h1><?php echo $goodSentence; ?></h1>
    <h1><?php echo 'Lungezza della stringa modificata = '; echo $goodSentenceleng; ?></h1>
    <h1><?php echo 'Parola badword che sostituisce con *** = '; echo $badword; ?></h1>
  </body>
</html>
