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
    

if(isset($_POST['updateUser'])){ $userId = $_GET['uid'];
// $userId = $_POST['uid'];
$userName
$userEmail
=
=
$_POST['uName'];
$userPassword
$_POST['uEmail'];
$query
=
=
$_POST['uPassword'];
$pdo->prepare("update users set name = :usName
=
3
email usEmail,
password = :usPassword where id = :usId");
$query->bindParam('usId', $userId);
$query->bindParam('usName', $userName); $query->bindParam('usEmail', $userEmail); $query->bindParam('usPassword', $userPassword);
$query->execute();
echo "<script>alert('record updated successfully'); location.assign('select.php');
</script>";
}
// record deleted if(isset($_GET['id'])){
$id = $_GET['id']; $query
=
$pdo->prepare("delete from users where id = :id");
$query->bindParam('id', $id);
$query->execute();
echo "<script>alert('record deleted successfully'); location.assign('select.p');
</script>";
  </body>
</html>