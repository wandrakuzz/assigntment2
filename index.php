
<?php
  if (isset($_POST['biodata_form'])){

    $servername ="localhost";
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

        $stmt->execute();



        include_once'save.php';
        }

      catch(PDOException $e)
      {
          echo "Error: " . $e->getMessage();
      }

      $conn = null;
    }

 ?>
 <?php

 $univ = array
   (
   array("name"=>"Universiti Putra Malaysia","abb"=>"UPM"),
   array("name"=>"Universiti Kebangsaan Malaysia","abb"=>"UKM"),
   array("name"=>"Universiti Sains Malaysia","abb"=>"USM"),
   array("name"=>"Universiti Malaya","abb"=>"UM"),
   array("name"=>"Universiti Teknologi Malaysia","abb"=>"UTM")
   );
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <title>Biodata</title>

    <style>
    #submit {
      background-color: red;
    }

    #reset {
      background-color: orange;
      color: white;
    }

    #kotak {
      padding-bottom: 30px;
    }
    </style>
  </head>
  <body>
  <div class="container-fluid" id="kotak">
    <div class="col-md-12">
      <div class="col-md-offset-1 col-md-10">

      </div>
    <!-- Create container paling luar -->


    <div class="col-md-offset-1 col-md-10">

      <h1>Biodata Form</h1>
      <hr>
    </div>
    <!-- Create container dengan luas 10,dengan offset 1 dari mula-->

    <div class="container-fluid" id="kotak">
      <div class="row">
        <div class="col-md-offset-1 col-md-10 well">
          <div class="container">
           <form class="" action="index.php" method="post">
              <div class="col-md-5">
                <div class="form-group">
                <label>Name :</label><input name="name" class="form-control" placeholder="Insert your name" autofocus>
              </div>
              <div class="form-group">
                <label>Age :</label><input name="age" class="form-control" type="number" name="age" min="0" max="100" step="1">
              </div>
              <div class="form-group">
                <label>Sex </label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sex" id="male" value="male">Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="sex" id="female" value="female">Female
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" cols="50" class="form-control" rows="4" placeholder="Insert your address"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Email :</label><input name="email" class="form-control" placeholder="Insert your email">
                  </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Date Of Birth</label><input class="form-control" type="date" name="dob">
              </div>
              <div class="form-group">
                <label>Height (cm)</label><input type="range" name="height" id="heightId" min = "100" max = "250" value = "150" oninput="outputId.value = heightId.value">
                <output id="outputId">150</output>
              </div>
              <div class="form-group">
                <label>Tel</label><input name="tel" class="form-control" pattern="\+60\d{2}-\d{7}" placeholder="+60##-#######">
              </div>
              <div class="form-group">
                <label>My Favourite Colour</label><br><input type="color" name="color" style="width:100%">
              </div>
              <div class="form-group">
                <label>My FBTWIG</label><input name="url" class="form-control" placeholder="Insert your url">
              </div>
              <div class="form-group">
                <label>My University</label>
                <select name="univ" class="form-control">
                  <option value="" selected>Select</option>
                  <?php
                  foreach ($univ as $u) {
                    echo "<option>".$u['name']."</option>";
                  }
                  ?>
                </select>

              </div>
            </div>

          </div>



        </div>
        <div class="col-md-offset-1 col-md-10">
          <input type="hidden" name="matricnum" value="a148647">
          <input type="submit" class="btn btn-danger btn-block" id="submit" value="Submit My Biodata" name="biodata_form">
          <input type="reset" class="btn btn-default btn-block" id="reset" value="Reset">
        </div>
</form>
      </div>
    </div>
  </div>
  </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="js/bootstrap.min.js"></script>
  </body>
</html>
