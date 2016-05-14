
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>

    #test {
      margin-top: 10px;
    }

    </style>
  </head>
  <body>
    <div class="col-md-offset-1 col-md-10">
      <div id="test" class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Welldone!</strong> Record of <?php echo "$name"; ?> has been added. 
      </div>
    </div>
  </body>
</html>
