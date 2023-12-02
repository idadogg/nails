
!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation</title>
    <!-- Add your styles if needed -->
    <style>
  body {
      font-family: "Sigmar One"; font-style: normal; font-variant: normal; font-weight: 700;
      padding: 70px;
      text-align:center; 
      background-color: lightblue;
      background-image: url("gif/sparkle.gif");
      background-size: 100%;
    }

  .container {
      max-width: 600px;
      margin: 50px auto;
      background-color: pink ;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  form {
      display: grid;
      grid-gap: 10px;
  }

  label {
      font-weight: bold;
      font-family: "Sigmar One"; font-style: normal; font-variant: normal; font-weight: 700;
  }

  input {
    font-family: "Sigmar One"; font-style: normal; font-variant: normal; font-weight: 700;
      padding: 8px;
      border: 1px solid midnightblue;
      border-radius: 4px;
  }

  input[type="submit"] {
      background-color: pink;
      color: #fff;
      cursor: pointer;
  }
</style>
</head>
<body>
    <h1>bókunar beðni móttekin!</h1>

    <?php
    // Check if the keys exist in $_POST before accessing them
    $name = isset($_POST['name']) ? $_POST['name'] : 'N/A';
    $insta = isset($_POST['insta']) ? $_POST['insta'] : 'N/A';
    $number = isset($_POST['number']) ? $_POST['number'] : 'N/A';
    $date = isset($_POST['date']) ? $_POST['date'] : 'N/A';
    $time = isset($_POST['time']) ? $_POST['time'] : 'N/A';

    echo "<p>takk fyrir að senda inn beiðni, ég mun hafa samband með SMS á símanúmerið $number með staðfestingu</p>";
    ?>
    
</body>
</html>
