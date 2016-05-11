<?php

if (isset($_POST['validate_biodata'])){

  $servername = "localhost";
  $username = "root";
  $password = "wan";
  $dbname = "a148647";

  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare("INSERT INTO biodata2(name,age,sex,address,email,dob,height,tel,color,url,univ)
      VALUES (:name,:age,:sex,:address,:email,:dob,:height,:tel,:color,:url,:univ)");

      $stmt->bindParam(':name',$name,PDO::PARAM_STR);
      $stmt->bindParam(':age',$age,PDO::PARAM_INT);
      $stmt->bindParam(':sex',$sex,PDO::PARAM_STR);
      $stmt->bindParam(':address',$address,PDO::PARAM_STR);
      $stmt->bindParam(':email',$email,PDO::PARAM_STR);
      $stmt->bindParam(':dob',$dob,PDO::PARAM_STR);
      $stmt->bindParam(':height',$height,PDO::PARAM_INT);
      $stmt->bindParam(':tel',$tel,PDO::PARAM_STR);
      $stmt->bindParam(':color',$color,PDO::PARAM_STR);
      $stmt->bindParam(':url',$url,PDO::PARAM_STR);
      $stmt->bindParam(':univ',$univ,PDO::PARAM_STR);

      $name = $_POST['name'];
      $age = $_POST['age'];
      $sex = $_POST['sex'];
      $address = $_POST['address'];
      $email = $_POST['email'];
      $dob = $_POST['dob'];
      $height = $_POST['height'];
      $tel = $_POST['tel'];
      $color = $_POST['color'];
      $url = $_POST['url'];
      $univ = $_POST['univ'];
      var_dump($stmt);
      $stmt->execute();

      echo "New records created successfully";
      }

    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
  }

 ?>
