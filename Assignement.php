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

  <div class="form-group">
  <form action="" method = "post">
      <label for="">Enter Email Address</label>
      <input type="text" name="uEmail" id="" class="form-control" placeholder="" aria-describedby="helpId">
      <button type="submit" name = "sub" class="btn btn-primary">Submit</button>  
    </form>
    </div>

    <?php 
        if(isset($_POST['sub'])){
            $emailaddress = $_POST['uEmail'];
            //echo $emailaddress;
            $staticdomain = 'yahoo.com';
            $emailaddressarray = explode ('@',$emailaddress);
            //print_r($emailaddressarray);
            $finalResult = strcmp ($staticdomain ,$emailaddressarray [count($emailaddressarray)-1]);
            if($finalResult == 0){
                echo 'Not Valid';
            }
            else {
                echo 'valid';
        }
        }
    ?>
     </body>
</html>