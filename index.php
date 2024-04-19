<!DOCTYPE html>
<?php

$user = 'root';
$pass = 'pierre2';

try {
  $pdo = new PDO('mysql:host=localhost;dbname=test;port=5353', $user, $pass);
} catch (PDOException $e) {
  echo $e;
}

$stmt = $pdo->prepare('SELECT * FROM env');
$stmt->execute();
$recups = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Test</title>
</head>

<body>
  <h1>Hello world !</h1>

  <?php foreach ($recups as $recup) {
    echo $recup['NAME'];
  }; ?>
</body>

</html>