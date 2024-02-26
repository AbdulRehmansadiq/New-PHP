<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="User_name" id="" calss=form-control>
            </div>
            <button name = "sub" class = "btn btn-info" type = "Submit">Submit</button>
        </form>
    </div>
    <?php
        if(isset($_get['sub'])){
            $name = $_get["User_name"];
            echo $name;
        }
    ?>
</body>
</html>