<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div>
    <form action="" method = "POST">
          <label for="">Enter Number</label>
          <input type="text" name="PhoneNumber" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <button type="submit" name= "Findcodes">Submit</button>
          </form>
    </div>
    <?php
    if(isset($_POST['Findcodes'])){
        $usernumber=$_POST['PhoneNumber'];
        $mycodes="0331,0332,0333,0334,0335,0336";
        $mycodesarray= explode(',',$mycodes);
        //print_r ($mycodesarray);
        $usernumbersplit = str_split($usernumber,4);
        //print_r($usernumbersplit);
        //echo $usernumbersplit[0];
        foreach ($mycodesarray as $code){
            if($usernumbersplit[0] == $code){
                echo 'your ufone num'." ".$usernumbersplit[0];
            }
        }
    }
    ?>
  </body>
</html>