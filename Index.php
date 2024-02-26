<?php 
$stdName = "Rehman";
$StdEmail = "Rehman@gmail.com";
$m = 10;
$d = 9;
?>

<h1>
    <?php echo $stdName?>
    <br>
    <?php echo $StdEmail?>
    <br>
    <?php echo $m * $d?>
</h1>

<?php
function fun(){
    echo "Pakistan Zindabad";
};

function fun2(){
    return "Jiye ppp";
};

function fun3(){
    Echo "<br>";
};

Echo fun2();
fun3();
fun();
?>
