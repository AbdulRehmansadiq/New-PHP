<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <form action="" method="post">
            <label for="">Enter number</label>
            <input type="text" name = "UNumber">
            <a name="printtable" id="" class="btn btn-primary"></a>
        </form>
        <?php
        if(isset($_POST['printtable'])){
            $usernumber = $_POST['UNumber']
            ?>
            
        <table class="table">
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        }
    </div>
</body>
</html>