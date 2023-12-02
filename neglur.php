<?php
$servername = "localhost";
$username = "idadogg";
$password = "Idda1010";
$database = "ida";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";

    $sql = 'SELECT name, insta, number, date, time FROM neglur';
    $stmt = $conn->query($sql);
  

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $insta = $_POST['insta'];
        $number = $_POST['number'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        // Insert the appointment details into the database
        $stmt = $conn->prepare("INSERT INTO neglur (name, insta, number, date, time) VALUES (:name, :insta, :number, :date, :time)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':insta', $insta);
        $stmt->bindParam(':number', $number);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':time', $time);
        $stmt->execute();

        // Redirect to the confirmation page
        header("Location: confirmation.php");
        exit();

        echo "Appointment booked successfully!";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Sigmar+One" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nail Salon Appointment</title>
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
    <div class="container">
        <h1>Panta tíma í neglur</h1>
        <form action="confirmation.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        
        <label for="insta">Instagram:</label>
        <input type="text" name="insta" required>
        
        <label for="number">Phone Number:</label>
        <input type="text" name="number" required>
        
        <label for="date">Date:</label>
        <input type="date" name="date" required>
        
        <label for="time">Time:</label>
        <input type="time" name="time" required>

        <input type="submit" value="Book Appointment">
    </form>
    </div>
</body>
</html>
