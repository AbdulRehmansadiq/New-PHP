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
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            @querry = $pdo ->querry(select * from user);

            $allUsers = $querry->fetchAll(PDO::FETCH_ASSOC);
            foreach($allUsers as $user){
            ?>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
                <?php 
            }
             ?>
        </tbody>
    </table>
  </body>
</html>