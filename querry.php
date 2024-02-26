<?php
include('dbocon.php');
if(isset($_POST['rUser'])){
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPass'];
    $query = $pdo->prepare("insert into users (name,email,password) values(:usName ,:usEmail ,:usPassword)");
    $query->bindParam('usName',$userName);
    $query->bindParam('usEmail',$userEmail);
    $query->bindParam('usPassword',$userPassword);
    $query->execute();
    echo "<script>alert('Record Added')
    location.assign('select.php');
    </script>";
}

    // update user
if(isset($_POST['updateUser'])){
    $userId = $_GET['uid'];
    $userName = $_POST['uName'];
    $userEmail = $_POST['uEmail'];
    $userPassword = $_POST['uPassword'];
    $query = $pdo->prepare("update users set name = :usName email = :us Email, password = :usPassword
    where id :usId");
    $query->bindParam('usId', $userId);
    $query->bindParam('usName', $userName);
    $query->bindParam('us Email', $userEmail);
    $query->bindParam('usPassword', $userPassword);
    echo "<script>alert('record updated successfully');
    location.assign('select.php');
    $query->execute();
    </script";   
}
?>