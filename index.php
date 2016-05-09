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
    </style>
  </head>
  <body>
  <div class="container-fluid">
    <div class="col-md-12">
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
           <form class="" action="index.html" method="post">
              <div class="col-md-5">
                <div class="form-group">
                <label>Name :</label><input class="form-control" placeholder="Insert your name">
              </div>
              <div class="form-group">
                <label>Age :</label><input class="form-control">
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
                    <textarea class="form-control" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Email :</label><input class="form-control">
                  </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <label>Date Of Birth</label><input class="form-control">
              </div>
              <div class="form-group">
                <label>Height (cm)</label><input type="range" name="height" id="heightId" min = "100" max = "250" value = "150" oninput="outputId.value = heightId.value">
                <output id="outputId">150</output>
              </div>
              <div class="form-group">
                <label>Tel</label><input class="form-control">
              </div>
              <div class="form-group">
                <label>My Favourite Colour</label><br><input type="color">
              </div>
              <div class="form-group">
                <label>My FBTWIG</label><input class="form-control">
              </div>
              <div class="form-group">
                <label>My University</label>
                <select class="form-control">
                  <option value="" selected>Select</option>
                  <?php
                  foreach ($univ as $u) {
                    echo "<option>".$u['name']."</option>";
                  }
                  ?>
                </select>
              </div>

            </div>
            </form>
          </div>



        </div>
        <div class="col-md-offset-1 col-md-10">
          <button type="button "class="btn btn-danger btn-block" id="submit"> Submit My Biodata</button>
          <button type="button" class="btn btn-default btn-block" id="reset">Reset</button>
        </div>

      </div>
    </div>
  </div>
  </div>
  </body>
</html>
