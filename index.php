<html>
<head>
<meta charset="utf-8">    
</head>
<body>
    <?php
    include "1.txt";
    ?>
<form method="post" action="">
請輸入m=<input type="text" name="m"><br/>
請輸入n=<input type="text" name="n"><br/>
<input type="submit"><input type="reset">
</form>
<hr>
<?php
$m=$_POST["m"];
$n=$_POST["n"];

echo "<table border='1'>";
for($i=1;$i<=$m;$i++){
    echo "<tr>";
    for($j=1;$j<=$n;$j++){
        echo"<td>";
        echo $i."*".$j."=".$i*$j."\t";
        echo"</td>";
    }
    echo "<tr/>";
}
echo "</table>";
$number=array("one"=>1,"two"=>2,"three"=>3);
echo $number["three"];
echo "<br/>";
foreach($number as $element){
    echo $element;
    echo "<br/>";
}
print_r($number);
$test="yes,no,ng,my";
$arr1=explode(",",$test);
print_r($arr1);

$newstring=implode("#",$number);
echo $newstring;
?>
</body>    
</html>