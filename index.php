<?php
session_start();
include 'data.php'; 
?>
<html>
  <head>
    <title>ДЗ php</title>
  </head>
  <body>
    <?php echo '<p>Автор проекта: ' . $author . '</p>'; 
if (isset($_SESSION['username'])){
    echo '<p>Привет ' . $_SESSION['username'] . '</p>';
    echo '<a href="exit.php">Выход</a>';
} else {
    echo $formText;
}
?>  
  </body>
</html>