<?php

if (isset($_POST['biodata_form'])) {

  // initialize variables
  $name = "";
  $age = "";
  $sex = "";
  $address = "";
  $email = "";
  $dob = "";
  $height = "";
  $tel = "";
  $color = "";
  $url = "";
  $univ = "";
  $matricnum = "";
  $count_error = 0;
  $msg = "";

  // validate if submitted variables empty show error msg else put in local variables
  if (isset($_POST['name']) && ($_POST['name'] != ""))
    $name = $_POST['name'];
  else
  {
    $msg .= "Error: Please insert a name.<br>";
    $count_error++;
  }
  if (isset($_POST['age']) && ($_POST['age'] != ""))
    $age = $_POST['age'];
  else
  {
    $msg .= "Error: Please insert an age.<br>";
    $count_error++;
  }
  if (isset($_POST['sex']) && ($_POST['sex'] != ""))
    $sex = $_POST['sex'];
  else
  {
    $msg .= "Error: Please insert a sex.<br>";
    $count_error++;
  }
  if (isset($_POST['address']) && ($_POST['address'] != ""))
    $address = $_POST['address'];
  else
  {
    $msg .= "Error: Please insert an address.<br>";
    $count_error++;
  }
  if (isset($_POST['email']) && ($_POST['email'] != ""))
    $email = $_POST['email'];
  else
  {
    $msg .= "Error: Please insert an email.<br>";
    $count_error++;
  }
  if (isset($_POST['dob']) && ($_POST['dob'] != ""))
    $dob = $_POST['dob'];
  else
  {
    $msg .= "Error: Please insert an dob.<br>";
    $count_error++;
  }
  if (isset($_POST['height']) && ($_POST['height'] != ""))
    $height = $_POST['height'];
  else
  {
    $msg .= "Error: Please insert an height.<br>";
    $count_error++;
  }
  if (isset($_POST['tel']) && ($_POST['tel'] != ""))
    $tel = $_POST['tel'];
  else
  {
    $msg .= "Error: Please insert an phone.<br>";
    $count_error++;
  }
  if (isset($_POST['color']) && ($_POST['color'] != ""))
    $color = $_POST['color'];
  else
  {
    $msg .= "Error: Please insert an color.<br>";
    $count_error++;
  }
  if (isset($_POST['url']) && ($_POST['url'] != ""))
    $url = $_POST['url'];
  else
  {
    $msg .= "Error: Please insert an fbtwig.<br>";
    $count_error++;
  }
  if (isset($_POST['univ']) && ($_POST['univ'] != ""))
    $univ = $_POST['univ'];
  else
  {
    $msg .= "Error: Please insert an univ.<br>";
    $count_error++;
  }

  // more validations here

  if ($count_error > 0) {
    echo $msg;
    echo "$count_error error(s) detected.";
    die();
  }
}
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}

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
    </style>
  </head>
  <body>
  <div class="container-fluid">
    <div class="col-md-12">
    <!-- Create container paling luar -->


    <div class="col-md-offset-1 col-md-10">
      <h1>Validate Biodata Form</h1>
      <hr>
    </div>
    <!-- Create container dengan luas 10,dengan offset 1 dari mula-->

    <div class="container-fluid" id="kotak">
      <div class="row">
        <div class="col-md-offset-1 col-md-5 well">
          <div class="container">
           <form class="" action="save_biodata.php" method="post">
              <div class="col-md-5">
                <div class="form-group">
                <label>Name :</label>
                <input name="name" class="form-control" placeholder="Insert your name" value="<?php echo titleCase($name); ?>"  disabled="" autofocus>
              </div>
              <div class="form-group">
                <label>Age :</label>
                <input name="age" class="form-control" type="number" name="age" min="0" max="100" step="1" value="<?php echo $age; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>Sex </label>
                <input class="form-control" name="sex" value="<?php echo titleCase($sex); ?>" disabled="">
              </div>
                  <div class="form-group">
                    <label>Address</label>
                    <textarea name="address" cols="50" class="form-control" rows="4" placeholder="Insert your address" disabled=""><?php echo $address; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label>Email :</label>
                    <input name="email" class="form-control" placeholder="Insert your email" value="<?php echo $email; ?>" disabled="">
                  </div>
              <div class="form-group">
                <label>Date Of Birth</label>
                <input class="form-control" name="dob" value="<?php echo date("d-m-Y", strtotime($dob)); ?>" disabled="">
              </div>
              <div class="form-group">
                <label>Height (cm)</label>
                <input class="form-control" name="height" id="heightId" value = "<?php echo $height; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>Tel</label>
                <input class="form-control" name="tel" value="<?php echo $tel; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>My Favourite Colour</label>
                <br><input class="form-control" name="color" style="width:100%" value="<?php echo $color; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>My FBTWIG</label>
                <input name="url" class="form-control" value="<?php echo $url; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>My University</label><?php echo $univ; ?>
                <input class="form-control" name="univ" value="<?php echo $univ; ?>" disabled="">
              </div>
              <div class="form-group">
                <label>My Matric Number</label>
                <input class="form-control" value"<?php echo $matricnum; ?>" disabled="">
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-offset-1 col-md-10" style="margin-bottom:10px;">
          <hr>
          <input type="hidden" name="matricnum" value="<?php echo $matricnum; ?>">
          <input class="btn btn-primary" type="submit" name="validate_biodata" value="Save My Biodata">
        </div>
      </form>
      </div>
    </div>
  </div>
  </div>
  </body>
</html>

<?php

function titleCase($s) {
  $s = ucwords(strtolower($s));
  $start = intval (strpos($s, stristr($s, "(")));
  if ($start <> 0) {
    $end = intval (strpos($s, stristr($s, ")")));
    $result = substr ($s, ($start+1), (($end - $start)-1) );
    $s = str_replace($result,strtoupper($result),$s);
  }
  return $s;
}

 ?>
